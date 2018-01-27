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
		'pdf' => [		'title' => 'Pdf',		'fields' => [		],	],
	'app_create' => 'Δημιουργία',
	'app_save' => 'Αποθήκευση',
	'app_edit' => 'Επεξεργασία',
	'app_view' => 'Εμφάνιση',
	'app_update' => 'Ενημέρωησ',
	'app_list' => 'Λίστα',
	'app_no_entries_in_table' => 'Δεν υπάρχουν δεδομένα στην ταμπέλα',
	'app_custom_controller_index' => 'index προσαρμοσμένου controller.',
	'app_logout' => 'Αποσύνδεση',
	'app_add_new' => 'Προσθήκη νέου',
	'app_are_you_sure' => 'Είστε σίγουροι;',
	'app_back_to_list' => 'Επιστροφή στην λίστα',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Διαγραφή',
	'global_title' => 'ATC Site',
];