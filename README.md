# Bakuna Tracker – Purok Diaz

Lab Activity 9: Barangay Matina Crossing vaccination dashboard built with Laravel, Blade, Tailwind (v3) and Vite.

## Login (seeded)

- Email: `nurse.diaz@bakuna.test`
- Password: `bakuna2026`

## Run it

```
composer install
npm install
copy .env.example .env   # then: php artisan key:generate
php artisan migrate:fresh --seed
npm run dev
php artisan serve
```

Run `npm run build` once if you only want to serve without the Vite dev server.

## Pages

- `/login` – sign in
- `/dashboard` – stats, alert banner, schedule, follow-up list
- `/schedule` – full schedule table
