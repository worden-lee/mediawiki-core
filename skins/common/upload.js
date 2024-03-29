( function ( mw, $ ) {
var	ajaxUploadDestCheck = mw.config.get( 'wgAjaxUploadDestCheck' ),
	fileExtensions = mw.config.get( 'wgFileExtensions' );


/**
 * onchange function to show a preview when license selector is changed
 *
 * All parameters must be properly escaped
 * HTML id attribute values.
 *
 * @param {string} licenseId ID of license selector field
 * @param {string} destFileId ID of destination filename field
 * @param {string} previewId ID of element where license preview goes
 */
window.licenseSelectorCheck = function( licenseId, destFileId, previewId ) {
	return function() {
		var selector = document.getElementById( licenseId );
		var selection = selector.options[selector.selectedIndex].value;
		if( selector.selectedIndex > 0 ) {
			if( selection == "" ) {
				// Option disabled, but browser is broken and doesn't respect this
				selector.selectedIndex = 0;
			}
		}
		// We might show a preview
		wgUploadLicenseObj.fetchPreview( selection, licenseId, destFileId, previewId );
	};
};

/**
 * Insert event handlers, empty elements, generally get form ready for 
 * the dynamics operations we're going to do when data is entered.
 *
 * All parameters must be properly escaped
 * HTML id attribute values.
 *
 * @param {string} sourceTypeId ID of the source-file type radio-button field
 * @param {string} uploadUrlId ID of copy-from-URL text field
 * @param {string} licenseId ID of license selector field
 * @param {string} warningId ID to attach to table row where warnings will go
 * @param {string} ackId Id of hidden field recording that warning was acknowledged
 * @param {string} destFileId ID of destination filename field
 * @param {string} descriptionId ID of file-description text field
 * @param {string} previewId ID of element where license preview goes
 */
window.uploadSetupByIds = function( sourceTypeId, uploadUrlId, licenseId, warningId, ackId, destFileId, descriptionId, previewId ) {
	// Disable URL box if the URL copy upload source type is not selected
	var e = document.getElementById( sourceTypeId );
	if( e ) {
		if( !e.checked ) {
			var ein = document.getElementById( uploadUrlId );
			if(ein)
				ein.setAttribute( 'disabled', 'disabled' );
		}
	}

	// For MSIE/Mac: non-breaking spaces cause the <option> not to render.
	// But for some reason, setting the text to itself works
	var selector = document.getElementById( licenseId );
	if (selector) {
		var ua = navigator.userAgent;
		var isMacIe = (ua.indexOf("MSIE") != -1) && (ua.indexOf("Mac") != -1);
		if (isMacIe) {
			for (var i = 0; i < selector.options.length; i++) {
				selector.options[i].text = selector.options[i].text;
			}
		}
	}

	// AJAX wpDestFile warnings
	if ( ajaxUploadDestCheck ) {
		// Insert an event handler that fetches upload warnings when wpDestFile
		// has been changed
		var ackElt = document.getElementsByName( ackId );
		var destElt = document.getElementById( destFileId );
		if( destElt ) 
			destElt.onchange = function ( e ) {
				wgUploadWarningObj.checkNow(this, warningId, ackElt);
			};
		// Insert a row where the warnings will be displayed just below the
		// wpDestFile row
		var descElt = document.getElementById( descriptionId )
		if( descElt && destElt ) {
			var destFileRow = destElt.parentNode.parentNode;
			var destFileTbody = destFileRow.parentNode;

			var optionsTable = descElt.tBodies[0];
			//var row = optionsTable.insertRow( 1 );
			var row = document.createElement( 'tr' );
			var td = document.createElement( 'td' );
			td.id = warningId;
			td.colSpan = 2;

			row.appendChild( td );
			destFileTbody.insertBefore( row, destFileRow.nextSibling );
		}
	}

	var wpLicense = document.getElementById( licenseId );
	if ( mw.config.get( 'wgAjaxLicensePreview' ) && wpLicense ) {
		// License selector check
		wpLicense.onchange = licenseSelectorCheck( licenseId, destFileId, previewId );

		// License selector table row
		var wpLicenseRow = wpLicense.parentNode.parentNode;
		var wpLicenseTbody = wpLicenseRow.parentNode;

		var row = document.createElement( 'tr' );
		var td = document.createElement( 'td' );
		row.appendChild( td );
		td = document.createElement( 'td' );
		td.id = previewId;
		row.appendChild( td );

		wpLicenseTbody.insertBefore( row, wpLicenseRow.nextSibling );
	}
};

/**
 * call uploadSetupByIds and do a bit of extra setup
 */
function uploadSetup() {
	uploadSetupByIds( 'wpSourceTypeurl', 'wpUploadFileURL', 'wpLicense', 'wpDestFile-warning', 'wpDestFileWarningAck', 'wpDestFile', 'mw-htmlform-description', 'mw-license-preview' );

	// fillDestFile setup
	var	i,
		uploadSourceIds = mw.config.get( 'wgUploadSourceIds' ),
		len = Array.isArray(uploadSourceIds) ? uploadSourceIds.length : 0;
	var upUrl = document.getElementById( 'wpUploadFileURL' );
	var destFile = document.getElementById( 'wpDestFile' );
	var upperm = document.getElementById( 'mw-upload-permitted' );
	var uppro = document.getElementById( 'mw-upload-prohibited' );
	var warningId = 'wpDestFile-warning';
	var ackElt = document.getElementsByName( 'wpDestFileWarningAck' );
	for ( i = 0; i < len; i += 1 )
		document.getElementById( uploadSourceIds[i] ).onchange = function (e) {
			fillDestFilename( this, upUrl, destFile, upperm, uppro, warningId, ackElt, 'wgUploadAutoFill' );
		}
}

window.wgUploadWarningObj = {
	'responseCache' : { '' : '&nbsp;' },
	'nameToCheck' : '',
	'typing': false,
	'delay': 500, // ms
	'timeoutID': false,

	'checkNow': function (field, warningId, ackElt) {
		if ( !ajaxUploadDestCheck || !sajax_init_object() ) return;
		if ( this.timeoutID ) {
			window.clearTimeout( this.timeoutID );
		}
		this.nameToCheck = field.value;
		this.timeout(field, warningId, ackElt);
	},

	'timeout' : function(field, warningId, ackElt) {
		if ( !ajaxUploadDestCheck || !sajax_init_object() ) return;
		injectSpinner( field, 'destcheck' );

		// Get variables into local scope so that they will be preserved for the
		// anonymous callback. fileName is copied so that multiple overlapping
		// ajax requests can be supported.
		var obj = this;
		var fileName = this.nameToCheck;
		sajax_do_call( 'SpecialUpload::ajaxGetExistsWarning', [this.nameToCheck],
			function (result) {
				obj.processResult(result, fileName, warningId, ackElt)
			}
		);
	},

	'processResult' : function (result, fileName, warningId, ackElt) {
		removeSpinner( 'destcheck' );
		this.setWarning(result.responseText, warningId, ackElt);
		this.responseCache[fileName] = result.responseText;
	},

	'setWarning' : function (warning, warningId, ackElt) {
		this.setInnerHTML(warningId, warning);

		// Set a value in the form indicating that the warning is acknowledged and
		// doesn't need to be redisplayed post-upload
		if ( warning == '' || warning == '&nbsp;' ) {
			ackElt[0].value = '';
		} else {
			ackElt[0].value = '1';
		}

	},
	'setInnerHTML' : function (id, text) {
		var element = document.getElementById( id );
		// Check for no change to avoid flicker in IE 7
		if (element.innerHTML != text) {
			element.innerHTML = text;
		}
	}
};

/**
 * Autofill the destination filename with a guess built from the source 
 * filename.  This is called when either the source-file or source-url is
 * updated.
 *
 * warningId parameter must be a properly escaped HTML id attribute value.
 *
 * @param {HTMLElement} upFile source-file element
 * @param {HTMLElement} upUrl source-url element
 * @param {HTMLElement} destFile destination-filename element
 * @param {HTMLElement} upperm element where upload permissions errors go
 * @param {HTMLElement} uppro element where upload-prohibited messages go
 * @param {string} warningId Id of element where upload warnings will go
 * @param {HTMLElement} ackElt hidden form field recording acknowledgement of warnings
 * @param {string} configvar name of mw.config variable controlling whether to do auto-filling
 */
window.fillDestFilename = function(upFile, upUrl, destFile, upperm, uppro, warningId, ackElt, configvar) {
	// e.g. mw.config.get( 'wgUploadAutoFill' )
	if ( !mw.config.get( configvar ) ) {
		return;
	}
	// Remove any previously flagged errors
	if( upperm ) upperm.className = '';

	if( uppro ) uppro.className = '';

	var path = upFile.value;
	// Find trailing part
	var slash = path.lastIndexOf('/');
	var backslash = path.lastIndexOf('\\');
	var fname;
	if (slash == -1 && backslash == -1) {
		fname = path;
	} else if (slash > backslash) {
		fname = path.substring(slash+1, 10000);
	} else {
		fname = path.substring(backslash+1, 10000);
	}

	// Clear the filename if it does not have a valid extension.
	// URLs are less likely to have a useful extension, so don't include them in the
	// extension check.
	if ( upUrl && mw.config.get( 'wgStrictFileExtensions' ) && fileExtensions && upFile.id !== upUrl.id ) {
		var found = false;
		if ( fname.lastIndexOf( '.' ) !== -1 ) {
			var ext = fname.substr( fname.lastIndexOf( '.' ) + 1 );
			for ( var i = 0; i < fileExtensions.length; i += 1 ) {
				if ( fileExtensions[i].toLowerCase() === ext.toLowerCase() ) {
					found = true;
					break;
				}
			}
		}
		if( !found ) {
			// Not a valid extension
			// Clear the upload and set mw-upload-permitted to error
			upFile.value = '';
			if( upperm ) upperm.className = 'error';
			if( uppro ) uppro.className = 'error';
			// Clear wpDestFile as well
			if( destFile ) destFile.value = '';
			return false;
		}
	}

	// Replace spaces by underscores
	fname = fname.replace( / /g, '_' );
	// Capitalise first letter if needed
	if ( mw.config.get( 'wgCapitalizeUploads' ) ) {
		fname = fname.charAt( 0 ).toUpperCase().concat( fname.substring( 1, 10000 ) );
	}

	// Output result
	if ( destFile ) {
		// Call decodeURIComponent function to remove possible URL-encoded characters
		// from the file name (bug 30390). Especially likely with upload-form-url.
		// decodeURIComponent can throw an exception in input is invalid utf-8
		try {
			destFile.value = decodeURIComponent( fname );
		} catch ( e ) {
			destFile.value = fname;
		}
		wgUploadWarningObj.checkNow(destFile, warningId, ackElt) ;
	}
};

window.toggleFilenameFiller = function() {
	if(!document.getElementById) return;
	var upfield = document.getElementById('wpUploadFile');
	var destName = document.getElementById('wpDestFile').value;
	wgUploadAutoFill = ( destName == '' || destName == ' ' );
};

window.wgUploadLicenseObj = {

	'responseCache' : { '' : '' },

	'fetchPreview': function( license, licenseId, destFileId, previewId ) {
		if ( !mw.config.get( 'wgAjaxLicensePreview' ) ) return;
		for (cached in this.responseCache) {
			if (cached == license) {
				this.showPreview( this.responseCache[license] );
				return;
			}
		}
		injectSpinner( document.getElementById( licenseId ), 'license' );

		var title = document.getElementById( destFileId ).value;
		if ( !title ) title = 'File:Sample.jpg';

		var url = mw.util.wikiScript( 'api' )
			+ '?action=parse&text={{' + encodeURIComponent( license ) + '}}'
			+ '&title=' + encodeURIComponent( title )
			+ '&prop=text&pst&format=json';

		var req = sajax_init_object();
		req.onreadystatechange = function() {
			if ( req.readyState == 4 && req.status == 200 )
				wgUploadLicenseObj.processResult( eval( '(' + req.responseText + ')' ), license, previewId );
		};
		req.open( 'GET', url, true );
		req.send( '' );
	},

	'processResult' : function( result, license, previewId ) {
		removeSpinner( 'license' );
		this.responseCache[license] = result['parse']['text']['*'];
		this.showPreview( this.responseCache[license], previewId );
	},

	'showPreview' : function( preview, previewId ) {
		var previewPanel = document.getElementById( previewId );
		if( previewPanel.innerHTML != preview )
			previewPanel.innerHTML = preview;
	}

};

$( document ).ready( uploadSetup );

}( mediaWiki, jQuery ) );
