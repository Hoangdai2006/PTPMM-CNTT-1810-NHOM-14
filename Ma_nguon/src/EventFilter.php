<?php
declare(strict_types=1);

function filterEvents(
    array $events,
    string $query,
    string $category = '',
    bool $availableOnly = false
): array {
    $result = [];
    $query = trim($query);
    $category = trim($category);

    foreach ($events as $event) {
        if (!is_array($event)) {
            continue;
        }

        $title = is_string($event['title'] ?? null) ? trim($event['title']) : '';
        $eventCategory = is_string($event['category'] ?? null) ? trim($event['category']) : '';
        $registered = is_numeric($event['registered'] ?? null) ? (int) $event['registered'] : 0;
        $capacity = is_numeric($event['capacity'] ?? null) ? (int) $event['capacity'] : 0;

        // Lọc theo từ khóa (không phân biệt hoa/thường, bỏ khoảng trắng thừa)
        $matchesQuery = $query === ''
            || stripos($title, $query) !== false;

        // Lọc theo danh mục (không phân biệt hoa/thường, bỏ khoảng trắng thừa)
        $matchesCategory = $category === ''
            || strcasecmp($eventCategory, $category) === 0;

        // Kiểm tra sự kiện còn chỗ
        $matchesAvailable = !$availableOnly || $registered < $capacity;

        // Kết hợp tất cả điều kiện bằng AND
        if ($matchesQuery && $matchesCategory && $matchesAvailable) {
            $result[] = $event;
        }
    }

    return $result;
}
