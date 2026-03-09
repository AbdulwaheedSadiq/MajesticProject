<?php
/** 
 * Helper functions for safe text truncation and length validation
 */

/**
 * Truncates text to a maximum number of characters, trying to cut at word boundaries
 *
 * @param string $text       The text to truncate
 * @param int    $maxChars   Maximum allowed characters (default 30)
 * @param string $ending     String to append when text is truncated (default ...)
 * @return string            Truncated text
 */
function truncateText(string $text, int $maxChars = 30, string $ending = '...'): string
{
    $text = trim($text);

    if (mb_strlen($text) <= $maxChars) {
        return $text;
    }

    // Try to find the last space before the limit
    $truncated = mb_substr($text, 0, $maxChars);
    $lastSpace = mb_strrpos($truncated, ' ');

    if ($lastSpace !== false) {
        $truncated = mb_substr($truncated, 0, $lastSpace);
    } else {
        // No space found → hard cut (rare case with very long words)
        $truncated = mb_substr($truncated, 0, $maxChars);
    }

    return $truncated . $ending;
}

/**
 * Checks if text exceeds maximum allowed characters
 *
 * @param string $text     Text to validate
 * @param int    $maxChars Maximum allowed characters (default 30)
 * @return array           Returns ['valid' => bool, 'error' => string|null]
 */
function validateTextLength(string $text, int $maxChars = 30): array
{
    $text = trim($text);
    $length = mb_strlen($text);

    if ($length > $maxChars) {
        return [
            'valid' => false,
            'error' => "Description must not exceed $maxChars characters (currently $length characters)."
        ];
    }

    return [
        'valid' => true,
        'error' => null
    ];
}

/**
 * Truncates text and escapes it for safe HTML output
 *
 * @param string $text
 * @param int    $maxChars
 * @return string Safe HTML-ready truncated text
 */
function safeShortText(string $text, int $maxChars = 30): string
{
    $truncated = truncateText($text, $maxChars);
    return htmlspecialchars($truncated, ENT_QUOTES, 'UTF-8');
}