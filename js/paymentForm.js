// form start
const pageLang = document.querySelector('html').getAttribute('lang');

const lettersOnly = {
  en: 'Lettersonly',
  ru: 'Только буквы',
  az: 'Yalnız məktublar',
};

const dontAddSymbolsonly = {
  en: 'Please dont add symbols',
  ru: 'Пожалуйста, не добавляйте символы',
  az: 'Xahiş edirəm simvol əlavə etməyin',
};

const pleaseFillCorrectly = {
  en: 'Please dont add symbols',
  ru: 'Пожалуйста, не добавляйте символы',
  az: 'Xahiş edirəm simvol əlavə etməyin',
};

const numberonly = {
  en: 'Number only',
  ru: 'Только номер',
  az: 'Yalnız nömrə',
};

const onlyString = {
  en: 'Lettersonly',
  ru: 'Только буквы',
  az: 'Yalnız hərf',
};

jQuery.validator.addMethod('onlyString', function (value, element) {
  return this.optional(element) || /^[a-zA-Z\söğıəçşü]+$/i.test(value);
}, onlyString[pageLang]);

jQuery.validator.addMethod('lettersonly', function (value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, lettersOnly[pageLang]);

jQuery.validator.addMethod('notSymbol', function (value, element) {
  return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
}, dontAddSymbolsonly[pageLang]);

jQuery.validator.addMethod('phoneNumber', function (value, element) {
  return this.optional(element) || /^[0-9 *()*]+$/i.test(value);
}, numberonly[pageLang]);

if (pageLang === 'az') {
  jQuery.extend(jQuery.validator.messages, {
    required: 'Bu xana mütləq doldurulmalıdır.',
    remote: 'Zəhmət olmasa, düzgün məna daxil edin.',
    email: 'Zəhmət olmasa, düzgün elektron poçt daxil edin.',
    onlyString: 'Zəhmət olmasa yalnız hərflərdən istifadə edin.',
    phoneNumber: "Zəhmət olmasa,tam doldurun.",
    url: 'Zəhmət olmasa, düzgün URL daxil edin.',
    date: 'Zəhmət olmasa, düzgün tarix daxil edin.',
    dateISO: 'Zəhmət olmasa, düzgün ISO formatlı tarix daxil edin.',
    number: 'Zəhmət olmasa, düzgün rəqəm daxil edin.',
    digits: 'Zəhmət olmasa, yalnız rəqəm daxil edin.',
    creditcard: 'Zəhmət olmasa, düzgün kredit kart nömrəsini daxil edin.',
    equalTo: 'Zəhmət olmasa, eyni mənanı bir daha daxil edin.',
    extension: 'Zəhmət olmasa, düzgün genişlənməyə malik faylı seçin.',
    maxlength: $.validator.format('Zəhmət olmasa, {0} simvoldan çox olmayaraq daxil edin.'),
    minlength: $.validator.format('Zəhmət olmasa, {0} simvoldan az olmayaraq daxil edin.'),
    rangelength: $.validator.format('Zəhmət olmasa, {0} - {1} aralığında uzunluğa malik simvol daxil edin.'),
    range: $.validator.format('Zəhmət olmasa, {0} - {1} aralığında rəqəm daxil edin.'),
    max: $.validator.format('Zəhmət olmasa, {0} və ondan kiçik rəqəm daxil edin.'),
    min: $.validator.format('Zəhmət olmasa, {0} və ondan böyük rəqəm daxil edin'),
});
} else if (pageLang === 'ru') {
  jQuery.extend(jQuery.validator.messages, {
    required: 'Это поле необходимо заполнить.',
    remote: 'Пожалуйста, введите правильное значение.',
    email: 'Пожалуйста, введите корректный адрес электронной почты.',
    onlyString : 'Пожалуйста, используйте только буквы',
    phoneNumber : 'Пожалуйста, заполните полностью.',
    url: 'Пожалуйста, введите корректный URL.',
    date: 'Пожалуйста, введите корректную дату.',
    dateISO: 'Пожалуйста, введите корректную дату в формате ISO.',
    number: 'Пожалуйста, введите число.',
    digits: 'Пожалуйста, вводите только цифры.',
    creditcard: 'Пожалуйста, введите правильный номер кредитной карты.',
    equalTo: 'Пожалуйста, введите такое же значение ещё раз.',
    extension: 'Пожалуйста, выберите файл с правильным расширением.',
    maxlength: $.validator.format('Пожалуйста, введите не больше {0} символов.'),
    minlength: $.validator.format('Пожалуйста, введите не меньше {0} символов.'),
    rangelength: $.validator.format('Пожалуйста, введите значение длиной от {0} до {1} символов.'),
    range: $.validator.format('Пожалуйста, введите число от {0} до {1}.'),
    max: $.validator.format('Пожалуйста, введите число, меньшее или равное {0}.'),
    min: $.validator.format('Пожалуйста, введите число, большее или равное {0}.')
});
} else {
  jQuery.extend(jQuery.validator.messages, {
    required: 'This field is required.',
    remote: 'Please fix this field.',
    email: 'Please enter a valid email address.',
    onlyString : 'Please use only letters',
    phoneNumber: "Please fill in completely.",
    url: 'Please enter a valid URL.',
    date: 'Please enter a valid date.',
    dateISO: 'Please enter a valid date (ISO).',
    number: 'Please enter a valid number.',
    digits: 'Please enter only digits.',
    creditcard: 'Please enter a valid credit card number.',
    equalTo: 'Please enter the same value again.',
    accept: 'Please enter a value with a valid extension.',
    maxlength: $.validator.format('Please enter no more than {0} characters.'),
    minlength: $.validator.format('Please enter at least {0} characters.'),
    rangelength: $.validator.format('Please enter a value between {0} and {1} characters long.'),
    range: $.validator.format('Please enter a value between {0} and {1}.'),
    max: $.validator.format('Please enter a value less than or equal to {0}.'),
    min: $.validator.format('Please enter a value greater than or equal to {0}.')
});
}

// newPatient-form-start
$('.form-first').validate({
  ignore: [],
  rules: {
      name: {
          onlyString: true ,
          required: true
      },
      surname: {
          onlyString: true ,
          required: true
      },
      phone: {
        phoneNumber: true,
        required: true
      }
  },
  errorPlacement: function (error, element) {
      if (element.is('select:hidden')) {
          error.insertAfter(element.next('.nice-select'));
      } else {
          error.insertAfter(element);
      }
  },
  highlight: function(element) {
    let parent = $(element).parents()
    if(parent && parent.hasClass('input-number-container')){
      $(element).parents('.form-group').addClass('special-form-group')
    }
    $(element).parents('.form-group').removeClass('valid_group').addClass('error_group');
    
  },
  unhighlight: function(element) {
    let parent = $(element).parents()
    if(parent && parent.hasClass('input-number-container')){
      $(element).parents('.form-group').removeClass('special-form-group')
    }
    $(element).parents('.form-group').removeClass('error_group').addClass('valid_group');
  },
  submitHandler: function() {
    $('.form-first').hide(500);
    $('.form-second').show(500)
 }
});
// newPatient-form-end