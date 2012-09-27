<?php
return array(
	'An error occured:' => 'Произошла ошибка:',
	'Can\'t find the record' => 'Запись не найдена',
	'Attention! The file ({fpath}) cannot be deleted' => 'Предупреждение! Невозможно удалить файл ({fpath})',
	'The file ({filename}) cannot be copied' => 'Невозможно принять файл',
	'An error occured with uploading of the file for field "{field}"' => 'Ошибка при загрузке файла в поле "{field}"',
	'Wrong data for default sorting' => 'Некорректные данные для сортировки',
	'Wrong field name "{fieldName}" for sorting' => 'Некорректное имя {fieldName} поля для сортировки',
	'Wrong params for access rights' => 'Некорректные параметры для установки прав',
	'You can only specify the interface before access rights' => 'Интерфейс может быть кастомизирован только до установки прав доступа',
	'Wrong data for PrimaryKey' => 'Некорректные параметры для установки PrimaryKey',
	'Incorrect configuration' => 'Некорректная конфигурация',
	'Wrong data for ForeignKey configuration' => 'Некорректные параметры для конфигурации ForeignKey',
	'Wrong data for DB Table Name' => 'Некорректный параметр имени таблицы БД',
	'Wrong trigger configuration' => 'Некорректная конфигурация триггера',
	'Unknown field type for column {column}' => 'Неизвестный тип для поля "{column}"',
	'Incorrect value "{value}" for field "{field}"' => 'Некорректное значение "{value}" для поля "{field}"',
	'The PrimaryKey "{fieldName}" value absents in the selection row' => 'PrimaryKey «{fieldName}» отсутствует в строке выборки',
	'The parameter "{paramName}" must be set for the field {fieldName}' => 'Параметр {paramName} должен быть установлен для поля {fieldName}',
	'Incorrect options configuration of the field {fieldName}' => 'Неправильная конфигурация опций для поля {fieldName}',
	'You should specify fields names in "select" option for foreign field "{fieldName}" to sort by it' => 'Необходимо указать имена полей в секции Select для поля типа Foreign ({fieldName}), чтобы сортировать по нему',
	'Function setSubHref() can be called only after fieldsConf()' => 'Функция setSubHref() может быть вызвана только после fieldsConf()',
	'The field "{field}" cannot be NULL but it\'s been passing by the form' => 'Поле {field} не может быть NULL, однако иные данные из формы переданы не были',
	'Wrong data has been passed for the field "{field}"' => 'Некорректные данные переданы для поля {field}',
	'An error was occured during execution the trigger "{func}"' => 'Возникла ошибка в процессе выполнения триггера {func}',
	'An error was occured during the query execution. You may contact the technical support and say the number #{errorNumber}' => 'Во время выполнения запроса произошла ошибка. Вы можете обратиться в службу технической поддержки, сообщив номер #{errorNumber}',
	'Sorry, your account is blocked' => 'К сожалению, Ваш аккаунт заблокирован',
	'Login or password is incorrect' => 'Неправильный логин или пароль',
	'Incorrect table fields configuration. Error: {exception}' => 'Некорректная конфигурация полей таблицы. Ошибка: {exception}',
	'The directory "{dirname}" cannot be created' => 'Директория "{dirname}" не может быть создана',
	'Incorrect validation condition for field "{fieldName}"' => 'Некорректное условие валидации для поля "{fieldName}"',
	//Breadcrumbs generation
	'Breadcrumbs can be generated only after AABreadcrumbs->query->select()->from() initializing. Or use call with static label.' => 'Хлебные крошки могут быть сгенерированы только после AABreadcrumbs->query->select()->from() инициализации. Или используйте вызов со статической меткой ссылки.',
	'Auto-generation of the breadcrumbs can be done only with the default inside-controller navigation.' => 'Автогенерация хлебных крошек может быть выполнена только при навигации внутри контроллера «по умолчанию».',
	'Incorrect breadcrumbs level.' => 'Некорректный уровень хлебных крошек.',
	'AutoAdmin cannot configure an automatic Action for the foreign interface on "{outAlias}": there is no selectable fields in the parent interface' => 'AutoAdmin не может сконфигурировать автоматическое Действие для foreign-интерфейса на {outAlias}: отсутствуют подходящие для листинговой выборки поля.',
	'There are no fields with the name {name} in the passed field configuration array' => 'Не существует полей с именем {name} в переданном конфигурационном массиве',
	'You try to use WYSIWIG field, but the TinyMCE extension not found. Please download it from http://www.yiiframework.com/extension/tinymce and install.' => 'Вы пытаетесь использовать поле WYSIWIG, однако расширение TinyMCE не найдено. Пожалуйста, загрузите его со страницы http://www.yiiframework.com/extension/tinymce и установите.',
);
