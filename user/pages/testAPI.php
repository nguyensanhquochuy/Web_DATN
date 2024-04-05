<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chọn Địa Phương</title>
</head>
<body>

<form>
    <label for="tinhThanhSelect">Chọn Tỉnh/Thành Phố:</label>
    <select id="tinhThanhSelect">
        <option value="">Chọn Tỉnh/Thành Phố</option>
        <optgroup label="Địa điểm phổ biến">
            <option value="1">Hà Nội</option>
            <option value="DN">Đà Nẵng</option>
        </optgroup>
        <!-- Option sẽ được thêm bằng JavaScript -->
    </select>
    <br>

    <label for="huyenThanhSelect">Chọn Quận/Huyện:</label>
    <select id="huyenThanhSelect">
        <option value="">Chọn Quận/Huyện</option>
    </select>
</form>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const tinhThanhSelect = document.getElementById('tinhThanhSelect');
    const huyenThanhSelect = document.getElementById('huyenThanhSelect');

    // Lấy dữ liệu tỉnh/thành phố ban đầu từ URL
    fetch('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/tinh_tp.json')
        .then(response => response.json())
        .then(data => {
            // Thêm các option cho thẻ select tỉnh/thành phố
            Object.entries(data).forEach(([code, province]) => {
                const option = document.createElement('option');
                option.value = code;
                option.textContent = province.name;
                tinhThanhSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error:', error));

    // Sự kiện khi người dùng thay đổi lựa chọn của thẻ select tỉnh/thành phố
    tinhThanhSelect.addEventListener('change', function() {
        const selectedProvinceCode = this.value;
        // Gửi yêu cầu Ajax để lấy dữ liệu về quận/huyện tương ứng
        fetch(`https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/quan_huyen.json`)
            .then(response => response.json())
            .then(data => {
                // Xóa tất cả các option cũ trong thẻ select quận/huyện
                huyenThanhSelect.innerHTML = '<option value="">Chọn Quận/Huyện</option>';
                // Thêm các option mới tương ứng với dữ liệu mới
                Object.entries(data).forEach(([code, district]) => {
                    if (district.parent_code === selectedProvinceCode) {
                        const option = document.createElement('option');
                        option.value = code;
                        option.textContent = district.name;
                        huyenThanhSelect.appendChild(option);
                    }
                });
            })
            .catch(error => console.error('Error:', error));
    });
});
</script>

</body>
</html>
