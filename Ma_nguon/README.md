# Lab 02 — Xây dựng module php kiểm tra điều kiện đăng ký

Mã mẫu cho phần hướng dẫn và mã khởi đầu cho bài tự làm.

## Mở bài

Mở terminal Ubuntu/WSL tại thư mục chứa `lab.sh`. Dùng PHP từ 8.1 và Git. Hướng dẫn chi tiết, sơ đồ, đoạn mã cần sửa, dữ liệu đối chiếu và rubric nằm trong tài liệu của bài lab.

```bash
bash lab.sh check
bash lab.sh run
```

Chương trình in kết quả ngay trong terminal.

Bài này không cần PostgreSQL, Composer hoặc framework.

## Kiểm tra bài

```bash
bash lab.sh test
bash lab.sh extend
```

`test` kiểm tra phần mẫu; `extend` kiểm tra phần tự làm. Các vị trí TODO là nhiệm vụ cần hoàn thiện; không sửa test để bỏ qua lỗi.

Kết quả mở rộng cần đạt: `TESTS=8 FAILED=0`. Có lớp kiểm tra sức chứa, chương trình gọi lớp và lớp mở rộng trả confirmed, waiting hoặc rejected theo quy tắc đã công bố.

## Tệp nộp

Giữ mã nguồn, dữ liệu mẫu và kiểm thử. Ghi lại lệnh chạy trong README. Không đưa `.local`, mật khẩu hoặc dữ liệu cá nhân thật vào kho mã và gói nộp. Nộp đúng commit theo yêu cầu của bài; nếu dùng Actions, đính kèm lần chạy tương ứng.

## Kết quả thực hiện

Đã hoàn thiện module PHP kiểm tra điều kiện đăng ký.

### Chức năng
- Kiểm tra sức chứa đăng ký.
- Từ chối khi dữ liệu không hợp lệ.
- Từ chối khi đăng ký đã đóng.
- Xác nhận đăng ký khi còn chỗ.
- Đưa vào danh sách chờ khi đã hết chỗ và cho phép chờ.
- Từ chối khi số đăng ký vượt quá sức chứa.

### Các lệnh kiểm thử

Kiểm tra môi trường:

    bash lab.sh check

Chạy chương trình:

    bash lab.sh run

Kiểm thử phần mẫu:

    bash lab.sh test

Kiểm thử phần mở rộng:

    bash lab.sh extend

### Kết quả kiểm thử
- Kiểm thử mẫu: 5/5 thành công.
- Kiểm thử mở rộng: 8/8 thành công.
- Tổng cộng: 13/13 bài kiểm thử thành công.
