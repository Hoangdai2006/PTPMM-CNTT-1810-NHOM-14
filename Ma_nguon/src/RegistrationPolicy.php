<?php
declare(strict_types=1);

require_once __DIR__ . '/CapacityPolicy.php';

final class RegistrationPolicy
{
    public function decide(
        int $capacity,
        int $registered,
        bool $open,
        bool $waitingEnabled
    ): string {
        // Dữ liệu không hợp lệ
        if ($capacity <= 0 || $registered < 0) {
            return 'rejected';
        }

        // Số đăng ký vượt quá sức chứa là dữ liệu không hợp lệ
        if ($registered > $capacity) {
            return 'rejected';
        }

        // Đăng ký đã đóng
        if (!$open) {
            return 'rejected';
        }

        // Còn chỗ trống
        $capacityPolicy = new CapacityPolicy();

        if ($capacityPolicy->canRegister($capacity, $registered)) {
            return 'confirmed';
        }

        // Đã hết chỗ
        if ($waitingEnabled) {
            return 'waiting';
        }

        return 'rejected';
    }
}
