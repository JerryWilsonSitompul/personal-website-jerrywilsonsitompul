# Jerry Wilson Sitompul Personal Website 

A personal website built with Laravel, Inertia.js, and Vue.js, showcasing a software engineer's portfolio, experience, and skills.

## Features

- 🏠 **Home Page**: Introduction, featured posts, and overview
- 💼 **Experience Page**: Career timeline and technology skills
- 📁 **Portfolio Page**: Project showcase and technology stack
- 🎨 **Responsive Design**: Built with Tailwind CSS
- ⚡ **Modern Stack**: Laravel 10 + Inertia.js + Vue 3 + Vite

## Tech Stack

- **Backend**: Laravel 10, PHP 8.1+
- **Frontend**: Vue.js 3, Inertia.js
- **Styling**: Tailwind CSS
- **Build Tool**: Vite
- **Database**: SQLite (default, easily configurable)

## Quick Start

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js & npm
- Git

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd rijal-inertia-clone
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   ```bash
   cp .env.example .env  # If .env doesn't exist
   php artisan key:generate
   ```

5. **Database Setup**
   ```bash
   # The project uses SQLite by default
   # Database file is already created at database/database.sqlite
   # No additional setup needed for SQLite
   ```

6. **Build Assets**
   ```bash
   npm run build
   # Or for development with hot reload:
   npm run dev
   ```

7. **Start the Application**
   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` in your browser.

## Development

### Running in Development Mode

1. **Start the Laravel server**
   ```bash
   php artisan serve
   ```

2. **Start Vite development server** (in another terminal)
   ```bash
   npm run dev
   ```

3. **Access the application**
   - Laravel: `http://localhost:8000`
   - Vite: `http://localhost:5173` (for asset hot reloading)

### Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── ExperienceController.php
│   │   │   └── PortfolioController.php
│   │   └── Middleware/
│   └── Providers/
├── config/
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   ├── Pages/
│   │   │   ├── Home.vue
│   │   │   ├── Experience.vue
│   │   │   └── Portfolio.vue
│   │   ├── Layouts/
│   │   │   └── Layout.vue
│   │   └── app.js
│   └── views/
│       └── app.blade.php
├── routes/
│   ├── web.php
│   └── api.php
└── public/
    └── images/
        └── profile.png
```

## Available Routes

- `/` - Home page
- `/en` - Home page (English)
- `/experience` - Experience timeline
- `/en/experience` - Experience timeline (English)
- `/portfolio` - Portfolio showcase
- `/en/portfolio` - Portfolio showcase (English)

## Configuration

### Database

The project uses SQLite by default. To use a different database:

1. Update `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

2. Run migrations (if you add any):
   ```bash
   php artisan migrate
   ```

### Customization

- **Colors**: Update `tailwind.config.js` to change the primary color scheme
- **Content**: Modify Vue components in `resources/js/Pages/`
- **Styles**: Update `resources/css/app.css` for custom styles
- **Profile Image**: Replace `public/images/profile.png`

## Deployment

### Building for Production

```bash
# Install dependencies
composer install --optimize-autoloader --no-dev
npm install

# Build assets
npm run build

# Optimize Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Environment Variables

Make sure to set these in production:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

## Key Features Implemented

✅ **Core Laravel Setup**
- Laravel 10 framework
- Proper directory structure
- Environment configuration
- Database setup (SQLite)

✅ **Inertia.js Integration**
- Server-side routing
- Client-side navigation
- Vue.js components

✅ **Frontend**
- Vue 3 components
- Tailwind CSS styling
- Responsive design
- Modern build process with Vite

✅ **Pages**
- Home page with profile and featured content
- Experience page with career timeline
- Portfolio page with project showcase

✅ **Features**
- Social media links
- Contact information
- Technology skill showcase
- Professional experience timeline

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test your changes
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Credits

- Original design inspiration: [rijalsolahudin.com](https://www.rijalsolahudin.com/en)
- Built with [Laravel](https://laravel.com/), [Inertia.js](https://inertiajs.com/), and [Vue.js](https://vuejs.org/)
- Styled with [Tailwind CSS](https://tailwindcss.com/)

## Support

If you encounter any issues or have questions, please check the documentation or create an issue in the repository.
