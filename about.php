<?php require('layout/header.php') ?>
<style>
    main {
        font-family: "Encode Sans SC", sans-serif;
    }

    .row img {
        max-width: 100%;
    }
</style>
<main>
    <div class="container">
        <div id="ant-layout">
            <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm món hoặc thức ăn">
                </form>
            </section>
            <section class="main">
                <div class="row">
                    <h3>Ducknee là gì?</h3>
                    <p>Chào mừng bạn đến với <strong>Ducknee</strong>, nơi mang đến cho bạn trải nghiệm độc đáo và tinh tế về hương vị. Chúng tôi tự hào là điểm đến lý tưởng cho những người yêu thích thưởng thức nước uống sáng tạo và không gian ấm cúng.<br>Chúng tôi tự hào với danh sách đa dạng các loại đồ uống, từ trà trái cây tươi mát đến các loại nước ép tự nhiên và các thức uống đặc biệt độc đáo của chúng tôi. Mỗi ly nước tại <strong>Ducknee</strong> được chế biến cẩn thận từ những nguyên liệu chất lượng nhất, mang đến cho bạn hương vị tuyệt vời và sự thư giãn tuyệt vời.</p>
                </div>
                <div class="row">
                    <h3><strong>Ducknee</strong> hoạt động như thế nào?</h3>
                    <p><strong>Ducknee</strong> hoạt động từ 7h đến 22h hằng ngày, </p>
                </div>
                <!-- <div class="row">
                    <img src="images/bg/GrabFood.jpg" alt="">

                    <h3>Những nhà hàng, quán ăn nào trong khu vực của tôi giao hàng qua GrabFood?</h3>
                    <p>Để xem danh sách các nhà hàng, quán ăn có giao hàng qua GrabFood bạn chỉ cần nhập địa chỉ của mình trên ứng dụng. Để đảm bảo đồ ăn nóng hổi, tươi ngon và được giao đến bạn nhanh chóng, GrabFood sẽ quét vị trí của bạn và gợi ý danh sách nhà hàng, quán ăn ở gần vị trí bạn nhất.</p>
                </div> -->
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng tiền mặt không?</h3>
                    <p>Có nhé!</p>
                </div>
              
                <div class="row">
                    <h3>Tôi có thể tìm thấy những nhà hàng, quán ăn nào trong khu vực của mình?</h3>
                    <p>Danh sách nhà hàng, quán ăn được sắp xếp dựa theo khoảng cách và thời gian giao hàng dự kiến từ Địa chỉ giao thức ăn đến vị trí của bạn.</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15672.113146836931!2d106.779867!3d10.885453!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1714972807113!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
        
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/jJoFCFcJHsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </section>
        </div>
    </div>
</main>
<?php require('layout/footer.php') ?>