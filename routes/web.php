<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $profile = [
        'name' => 'GERALD BALCUEVA ORALLER',
        'title' => 'Aspiring Web Developer',
        'intro' => 'I am a Bachelor of Science in Information Technology (BSIT) graduate with a strong foundation in both front-end and back-end web development.I also have a solid understanding of network fundamentals and soft skills that are essential for success in the tech industry.',

        'about' => 'I am a BSIT graduate and aspiring web developer passionate about building responsive and user-friendly websites. I work with HTML, CSS, Tailwind CSS, JavaScript, Bootstrap, PHP, Laravel, and MySQL, while using Git, GitHub, VS Code, and Linux in my development workflow. I enjoy learning new technologies, solving problems, and creating applications that deliver meaningful experiences. I am currently seeking opportunities to grow, contribute, and continue my journey in the world of web development.',

        'age' => '22',
        'location' => 'CALALAHAN, SAN JOSE, CAMARINES SUR, PHILIPPINES',
        'email' => 'orallergerald@gmail.com',
        'github' => 'https://github.com/G0INGM3RRY/',
        'linkedin' => 'www.linkedin.com/in/gerald-oraller-91354740a',
        'facebook' => 'https://www.facebook.com/gerald.oraller.1/',
        'education' => [
            'school' => 'PARTIDO STATE UNIVERSITY',
            'course' => 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY',
            'graduated' => '2026',
        ],
    ];

    $skills = [
        [
            'category' => 'Frontend',
            'description' => 'Interfaces that are responsive, accessible, and easy to use.',
            'items' => ['HTML', 'CSS', 'Tailwind CSS', 'JavaScript', 'Bootstrap'],
        ],
        [
            'category' => 'Backend',
            'description' => 'Server-side development with clean data flows and reliable apps.',
            'items' => ['PHP', 'Laravel', 'MySQL'],
        ],
        [
            'category' => 'Tools',
            'description' => 'Daily development tools for versioning, editing, and deployment.',
            'items' => ['Git', 'GitHub', 'VS Code', 'Linux'],
        ],
        [
            'category' => 'Network Fundamentals',
            'description' => 'Understanding of basic networking concepts and protocols.',
            'items' => ['Basic subnetting', 'IP addressing'],
        ],
        [
            'category' => 'Soft Skills',
            'description' => 'Collaboration, problem-solving, and continuous learning.',
            'items' => ['Teamwork', 'Technical Troubleshooting Skills', 'Adaptability', 'Time Management', 'Quick Learning'],
        ],
    ];

    $projects = [
        [
            'title' => 'ALDAWAN: DIGITAL JOB MATCHING SYSTEM FOR BOTH FORMAL AND INFORMAL EMPLOYMENT',
            'description' => 'A web-based job matching system that connects job seekers with employers, providing a platform for both formal and informal employment opportunities.',
            'technologies' => ['Laravel', 'Bootstrap', 'MySQL'],
            'image' => 'images/project1.jpg',
            'github_link' => 'https://github.com/G0INGM3RRY/ALDAWAN',
            'live_demo_link' => '#',
        ],
        [
            'title' => 'DILG SAN JOSE REPORT MONITORING SYSTEM',
            'description' => 'A system for monitoring and managing reports from the Department of the Interior and Local Government in San Jose.',
            'technologies' => ['Laravel', 'Tailwind CSS', 'PHP', 'PostgreSQL'],
            'image' => 'images/project2.jpg',
            'github_link' => 'https://github.com/G0INGM3RRY/DILG-web',
            'live_demo_link' => 'https://dilg-web.onrender.com/',
        ],
        [
            'title' => 'Ano, PHOTO?',
            'description' => 'A simple photo gallery application built with Laravel.',
            'technologies' => ['Laravel', 'MySQL', 'GitHub'],
            'image' => 'images/project3.jpg',
            'github_link' => '#',
            'live_demo_link' => '#',
        ],
    ];

    $experience = [
        'has_experience' => false,
        'company' => 'COMPANY_NAME',
        'position' => 'POSITION',
        'period' => 'YEAR_STARTED - YEAR_ENDED',
        'description' => 'DESCRIPTION_OF_WORK',
        'journey' => [
            'Self-studying web development',
            'Practicing Laravel projects',
            'Exploring Linux and open-source tools',
            'Exploring networking fundamentals',
            'Likes to learn and troubleshooting technologies'
        ],
    ];

    $certificates = [
        [
            'name' => 'Free Coding Bootcamp:Basic Web Development Workshop',
            'organization' => 'ZUITT',
            'year' => '2025',
        ],
        [
            'name' => 'Web Development: An Introductory Workshop',
            'organization' => 'DICT',
            'year' => '2025',
        ],
        [
            'name' => 'Responsive Web Design',
            'organization' => 'FreeCodeCamp',
            'year' => date('Y'),
        ],
    ];

    $technologies = collect($projects)
        ->flatMap(fn ($project) => $project['technologies'])
        ->unique()
        ->sort()
        ->values();

    return view('pages.home', compact(
        'profile',
        'skills',
        'projects',
        'experience',
        'certificates',
        'technologies'
    ));
})->name('home');
