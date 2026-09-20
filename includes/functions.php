<?php

function getReadings(): array
{
    return require __DIR__ . '/../data/readings.php';
}

function getSelectedDate(): string
{
    $date = $_GET['date'] ?? date('Y-m-d');

    $dateObject = DateTime::createFromFormat('Y-m-d', $date);

    if (!$dateObject || $dateObject->format('Y-m-d') !== $date) {
        return date('Y-m-d');
    }

    return $date;
}

function getReadingForDate(string $date): ?array
{
    $readings = getReadings();

    return $readings[$date] ?? null;
}

function getPreviousDate(string $date): string
{
    $dateObject = new DateTime($date);

    $dateObject->modify('-1 day');

    return $dateObject->format('Y-m-d');
}

function getNextDate(string $date): string
{
    $dateObject = new DateTime($date);

    $dateObject->modify('+1 day');

    return $dateObject->format('Y-m-d');
}

function formatGermanDate(string $date): string
{
    $timestamp = strtotime($date);

    $weekdays = [
        'Sunday' => 'Sonntag',
        'Monday' => 'Montag',
        'Tuesday' => 'Dienstag',
        'Wednesday' => 'Mittwoch',
        'Thursday' => 'Donnerstag',
        'Friday' => 'Freitag',
        'Saturday' => 'Samstag'
    ];

    $months = [
        1 => 'Januar',
        2 => 'Februar',
        3 => 'März',
        4 => 'April',
        5 => 'Mai',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'August',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Dezember'
    ];

    $weekday = $weekdays[date('l', $timestamp)];

    $day = date('d', $timestamp);

    $month = $months[(int) date('n', $timestamp)];

    $year = date('Y', $timestamp);

    return "{$weekday}, {$day}. {$month} {$year}";
}

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function getArticles(): array
{
    $articles = require __DIR__ . '/../data/articles.php';

    usort($articles, function ($a, $b) {
        return strcmp($b['date'], $a['date']);
    });

    return $articles;
}

function getArticleBySlug(string $slug): ?array
{
    $articles = getArticles();

    foreach ($articles as $article) {
        if ($article['slug'] === $slug) {
            return $article;
        }
    }

    return null;
}

function getLatestArticles(int $limit = 4): array
{
    return array_slice(getArticles(), 0, $limit);
}

/*
|--------------------------------------------------------------------------
| Podcasts
|--------------------------------------------------------------------------
*/

function getPodcasts(): array
{
    return require __DIR__ . '/../data/podcasts.php';
}

function getPodcastBySlug(string $slug): ?array
{
    $podcasts = getPodcasts();

    foreach ($podcasts as $podcast) {
        if ($podcast['slug'] === $slug) {
            return $podcast;
        }
    }

    return null;
}

function getPodcastAudioFile(string $audioPath): string
{
    return __DIR__ . '/..' . $audioPath;
}

function podcastAudioExists(string $audioPath): bool
{
    return file_exists(
        getPodcastAudioFile($audioPath)
    );
}