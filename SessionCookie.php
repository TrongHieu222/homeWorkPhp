<?php
/** Cookie là gì? Tại sao phải sử dụng Cookie

Session là gì?

Phân biệt Session và Cook
*
 * Session đơn giản là lưu lại dữ liệu của người dùng sử dụng website
 * Khái niệm cookie cũng được dùng để lưu những thông tin tạm thời.
 * Nhưng tập tin cookie sẽ được truyền từ server tới browser
 * và được lưu trữ trên máy tính của bạn khi bạn truy cập vào ứng dụng.
 * Sử dụng:Cookie thường được tạo ra khi người dùng truy cập một website,
 * cookie sẽ ghi nhớ những thông tin như tên đăng nhập, mật khẩu,
 * các tuỳ chọn do người dùng lựa chọn đi kèm. Các thông tin này
 * được lưu trong máy tính để nhận biết người dùng khi truy cập vào một trang web.

So sánh
 * Cookie được lưu trữ trên trình duyệt của người dùng.	Session không được lưu trữ trên trình duyệt.
Dữ liệu cookie được lưu trữ ở phía client.	Dữ liệu session được lưu trữ ở phía server.
Dữ liệu cookie dễ dàng sửa đổi hoặc đánh cắp khi chúng được lưu trữ ở phía client.	Dữ liệu session không dễ dàng sửa đổi vì chúng được lưu trữ ở phía máy chủ.
Dữ liệu cookie có sẵn trong trình duyệt đến khi expired.	Sau khi đóng trình duyệt sẽ hết phiên làm việc (session)


 *session_destroy(); đang xóa toàn bộ phiên.

session_unset(); chỉ xóa các biến khỏi phiên - phiên vẫn tồn tại. Chỉ có dữ liệu bị cắt ngắn.

 */


?>