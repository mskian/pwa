# Flarum PWA

> Progressive web APP Flarum Forum

Core Concept & Inspired from - <https://github.com/zerosonesfun/pwa>

This is My Personal Flarum Extension for My Forum to Enable PWA Feature.

## Usage

- Install this Extension via Composer

```bash
composer require mskian/pwa
```

- Log-in to your Forum Admin Dashboard > Extension > Enable PWA

## Setup PWA

- Follow <https://github.com/zerosonesfun/pwa> this respo for PWA installation on your Flarum Forum
- Anyways I Share my Steps to configure PWA for my forum
- Generate ICON for PWA from here - <https://appiconmaker.co/>
- Update PWA APP title, Short_name & Description on Manifest file - <https://github.com/mskian/pwa/blob/master/assets/site.webmanifest>
- put `sw.js` & `site.webmanifest` File's on **Public** Folder

```bash
wget https://raw.githubusercontent.com/mskian/pwa/master/assets/sw.js
```

```bash
wget https://raw.githubusercontent.com/mskian/pwa/master/assets/site.webmanifest
```

## Update

```bash
composer require mskian/pwa
```

- Clear Flarum cache

```bash
php flarum cache:clear
```

## License

MIT
