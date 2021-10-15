// popup form recording
export function popupFormRecording () {
    if(document.querySelector('.popupFormRecording_js')) {
        var valid = false;
        var errors;
        var recordingForm = document.querySelector('.popupFormRecording_js');
        var fields = recordingForm.querySelectorAll('.requiredField_js');
        var removeError = function () {
            errors = recordingForm.querySelectorAll('.error');
            for (var i = 0; i < errors.length; i++) {
                errors[i].classList.remove('error');
            }
        }
        var checkFields = function () {
            for (var i = 0; i < fields.length; i++) {
                if (!fields[i].value) {
                    fields[i].parentNode.classList.add('error');
                }
            }
        }
        var validLenPhone = function () {
            let inputPhone = recordingForm.querySelector('.maskPhone');
            let inputPhoneVal = inputPhone.value;
            if (inputPhoneVal.length < 16) {
                inputPhone.parentNode.classList.add('error');
            } else {
                inputPhone.parentNode.classList.remove('error');
            }
        }
        var validTotal = function () {
            var fields = recordingForm.querySelectorAll('.envelopeInput');
            fields.forEach((item) => {
                if(item.classList.contains('error')) {
                    valid = false;
                } else {
                    valid = true;
                }
            });
        }
        $('.popupFormRecording_js .maskPhone').mask('+7 Z00 000-00-00', {
            'translation': {
                Z: {pattern: /[0-69-9]/},
            }
        });
        recordingForm.addEventListener('submit', function (event) {
            event.preventDefault();
            removeError();
            checkFields();
            validLenPhone();
            validTotal();
            if (valid === true) {
                console.log('.fetch')
            }
        })
    }
}

// form consult
export function formConsult () {
    if(document.querySelector('.sectionConsult__form')) {
        var valid = false;
        var errors;
        var consultForm = document.querySelector('.sectionConsult__form');
        var fields = consultForm.querySelectorAll('.requiredField_js');
        var removeError = function () {
            errors = consultForm.querySelectorAll('.error');
            for (var i = 0; i < errors.length; i++) {
                errors[i].classList.remove('error');
            }
        }
        var checkFields = function () {
            for (var i = 0; i < fields.length; i++) {
                if (!fields[i].value) {
                    fields[i].parentNode.classList.add('error');
                }
            }
        }
        var validLenPhone = function () {
            let inputPhone = consultForm.querySelector('.maskPhone');
            let inputPhoneVal = inputPhone.value;
            if (inputPhoneVal.length < 16) {
                inputPhone.parentNode.classList.add('error');
            } else {
                inputPhone.parentNode.classList.remove('error');
            }
        }
        var validTotal = function () {
            var fields = consultForm.querySelectorAll('.envelopeInput');
            fields.forEach((item) => {
                if(item.classList.contains('error')) {
                    valid = false;
                } else {
                    valid = true;
                }
            });
        }
        $('.sectionConsult__form .maskPhone').mask('+7 Z00 000-00-00', {
            'translation': {
                Z: {pattern: /[0-69-9]/},
            }
        });
        consultForm.addEventListener('submit', function (event) {
            event.preventDefault();
            removeError();
            checkFields();
            validLenPhone();
            validTotal();
            if (valid === true) {
                console.log('.fetch')
            }
        })
    }
}