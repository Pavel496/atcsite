<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'approved' => 'Approved',		],	],
		'content-management' => [		'title' => 'Content management',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',			'slug' => 'Slug',		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [			'title' => 'Tag',			'slug' => 'Slug',		],	],
		'content-pages' => [		'title' => 'Pages',		'fields' => [			'title' => 'Title',			'category-id' => 'Categories',			'tag-id' => 'Tags',			'page-text' => 'Text',			'excerpt' => 'Excerpt',			'featured-image' => 'Featured image',		],	],
		'messages' => [		'title' => 'Messages',		'fields' => [		],	],
		'pdf' => [		'title' => 'Pdf',		'fields' => [			'name' => 'Name',			'information' => 'Information',			'file' => 'File',			'created-by' => 'Created by',		],	],
	'app_create' => 'Създай',
	'app_save' => 'Запази',
	'app_edit' => 'Промени',
	'app_view' => 'Покажи',
	'app_update' => 'Обнови',
	'app_list' => 'Списък',
	'app_no_entries_in_table' => 'Няма записи в таблицата',
	'app_custom_controller_index' => 'Персонализиран контролер.',
	'app_logout' => 'Изход',
	'app_add_new' => 'Добави нов',
	'app_are_you_sure' => 'Сигурни ли сте?',
	'app_back_to_list' => 'Обратно към списъка',
	'app_dashboard' => 'Табло',
	'app_delete' => 'Изтрий',
	'global_title' => 'Сайт АУЦ',
];