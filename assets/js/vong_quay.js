$(document).ready(function() {
    let timeRotate = 7000; // 7 giây
    let currentRotate = 0;
    let isRotating = false;
    const wheel = $('.wheel');
    const btnWheel = $('.btn--wheel');

    let listGift = [];
    let rotate = 0;
    let skewY = 0;

    const initializeWheel = (listGift) => {
        const size = listGift.length;
        rotate = 360 / size;
        skewY = 90 - rotate;

        listGift.map((item, index) => {
            const elm = document.createElement('li');
            elm.classList.add('vatpham');

            elm.style.transform = `rotate(${rotate * index}deg) skewY(-${skewY}deg)`;

            if (index % 2 == 0) {
                elm.innerHTML = `<p style="transform: skewY(${skewY}deg) rotate(${rotate / 2}deg);" class="text text-1">
                <b>${item.text}</b>
                </p>`;
            } else {
                elm.innerHTML = `<p style="transform: skewY(${skewY}deg) rotate(${rotate / 2}deg);" class="text text-2">
                <b>${item.text}</b>
                </p>`;
            }

            wheel.append(elm);
        });
    };

    $.ajax({
        url: '/assets/js/ajaxs/action/vongquay-freegems.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            listGift = data;
            initializeWheel(listGift);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });

    const start = () => {
        isRotating = true;
        btnWheel.prop('disabled', true);

        const user_id = $('#user_id').val();

        $.ajax({
            url: '/assets/js/ajaxs/action/vongquay-freegems.php?action=getGift',
            type: 'POST',
            dataType: 'json',
            data: { user_id: user_id },
            success: function(response) {
                if (response.error) {
                    isRotating = false;
                    btnWheel.prop('disabled', false);
                    swal({
                        title: 'Lỗi',
                        text: response.error,
                        type: 'error',
                        confirmButtonColor: "#DD6B55"
                    });
                } else {
                    currentRotate += 360 * 10;
                    rotateWheel(currentRotate, response.gift.index);
                    showGift(response.gift);
                    $('#luot_quay').text(response.turns); // Cập nhật số lượt quay
                }
            },
            error: function(error) {
                console.error('Error:', error);
                isRotating = false;
                btnWheel.prop('disabled', false);
            }
        });
    };

    const rotateWheel = (currentRotate, index) => {
        wheel.css('transform', `rotate(${currentRotate - index * rotate - rotate / 2}deg)`);
    };

    const showGift = gift => {
        let timer = setTimeout(() => {
            isRotating = false;
            btnWheel.prop('disabled', false);
            swal({
                title: 'Thành công',
                type: 'success',
                text: `Chúc mừng bạn đã nhận được "${gift.text}"`,
                confirmButtonColor: "#0CAF60"
            });
            clearTimeout(timer);
        }, timeRotate);
    };

    btnWheel.on('click', () => {
        !isRotating && start();
    });
});
