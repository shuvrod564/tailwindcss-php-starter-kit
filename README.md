# TailwindCSS PHP Starter Kit

A lightweight starter template for building modern PHP projects with **Tailwind CSS**.  
This kit helps you quickly set up Tailwind with PHP without any complicated bundlers.

---

## 🚀 Features
- PHP + TailwindCSS integration
- Minimal setup with `@tailwindcss/cli`
- Autoprefixer & PostCSS support
- Watch mode for development
- Minify mode for production

---

## 📂 Project Structure

```
. 
├── assets/
│ └── css/
│   └── output.css # Generated Tailwind build
|   └── Other third party css if required
│ └── js/ 
|   └── Other third party css if required
│ └── images/ 
|   └── Site images
├── css/
│ └── input.css # Tailwind input file
├── index.php # Starter PHP file
├── package.json
├── postcss.config.js # Optional PostCSS config
├── README.md
└── .gitignore
```

---

## ⚙️ Installation

```bash
# Install dependencies
npm install
```

---

## 🛠️ Usage

### Development (watch mode)
Runs Tailwind CLI in watch mode:

```bash
npm run build
```

This will watch changes in your `src/input.css` and output to:

```
assets/css/output.css
```

### Production Build
Generates a minified version for production:

```bash
npm run build:prod
```

---

## 🔧 Configuration
- **Input file**: `./src/input.css`
- **Output file**: `./assets/css/output.css` 

---

## 📜 License
MIT © [shuvrodev](https://github.com/shuvrodev)
