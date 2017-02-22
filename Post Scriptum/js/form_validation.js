$(document).ready(function() {
			$('#registration-form').bootstrapValidator({
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
		            invalid: 'glyphicon glyphicon-remove',
		            validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					name: {
						validators: {
							stringLength: { min: 2, max: 25 },
							notEmpty: { message: 'Molimo unesite Vaše ime' }
						}
					},
					surname: {
						validators: {
							stringLength: { min: 2, max: 25 },
							notEmpty: { message: 'Molimo unesite Vaše prezime' }
						}
					},
					username: {
						validators: {
							stringLength: { min: 2, max: 25 },
							notEmpty: { message: 'Molimo unesite Vaše korisničko ime' }
						}
					},
					email: {
						validators: {
							notEmpty: { message: 'Molimo unesite Vašu email adresu' },
							emailAddress: { message: 'Molimo unesite validnu email adresu' }
						}
					},
					password: {
						validators: {
							notEmpty: { message: 'Molimo unesite Vašu šifru' }
						}
					},
					conf_password: {
						validators: {
							identical: {
								field: 'password',
								message: 'Unesene šifre nisu identične'
							},
							notEmpty: { message: 'Molimo unesite Vašu šifru ponovno' }
						}
					}
				} // end of fields
			}).on('success.form.bv', function(e) {
				//alert('Uspješno ste se prijavili na Post Scriptum. Hvala Vam!');
			});
		});