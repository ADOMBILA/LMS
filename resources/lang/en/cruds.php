<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'phone'                    => 'Phone',
            'phone_helper'             => ' ',
        ],
    ],
    'course' => [
        'title'          => 'Course',
        'title_singular' => 'Course',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'requirement'        => 'Requirement',
            'requirement_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'level'              => 'Level',
            'level_helper'       => ' ',
        ],
    ],
    'level' => [
        'title'          => 'Level',
        'title_singular' => 'Level',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'lesson' => [
        'title'          => 'Lesson',
        'title_singular' => 'Lesson',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'desctiption'        => 'Desctiption',
            'desctiption_helper' => ' ',
            'file'               => 'File',
            'file_helper'        => ' ',
            'course'             => 'Course',
            'course_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'content'            => 'Content',
            'content_helper'     => ' ',
        ],
    ],
    'assignment' => [
        'title'          => 'Assignment',
        'title_singular' => 'Assignment',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'text'               => 'Text',
            'text_helper'        => ' ',
            'lesson'             => 'Lesson',
            'lesson_helper'      => ' ',
            'deadline'           => 'Deadline',
            'deadline_helper'    => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'file'               => 'File',
            'file_helper'        => ' ',
        ],
    ],
    'assignmentSubmission' => [
        'title'          => 'Assignment Submission',
        'title_singular' => 'Assignment Submission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'assignment'        => 'Assignment',
            'assignment_helper' => ' ',
            'student'           => 'Student',
            'student_helper'    => ' ',
            'text'              => 'Text',
            'text_helper'       => ' ',
            'file'              => 'File',
            'file_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'courseInstructor' => [
        'title'          => 'Course Instructor',
        'title_singular' => 'Course Instructor',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'instructor'        => 'Instructor',
            'instructor_helper' => ' ',
            'course'            => 'Course',
            'course_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'notice' => [
        'title'          => 'Notice',
        'title_singular' => 'Notice',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'author'            => 'Author',
            'author_helper'     => ' ',
            'course'            => 'Course',
            'course_helper'     => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'file'              => 'File',
            'file_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'courseStudent' => [
        'title'          => 'Course Student',
        'title_singular' => 'Course Student',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'course'            => 'Course',
            'course_helper'     => ' ',
            'student'           => 'Student',
            'student_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'chat' => [
        'title'          => 'Chat',
        'title_singular' => 'Chat',
    ],

];
