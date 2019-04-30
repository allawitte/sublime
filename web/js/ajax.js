/**
 * Created by HP on 4/27/2019.
 */
disableCheckout();
$('#page-content').on('click', '.product-button__add', function(e){
    e.preventDefault();
    let quantity = $('#quantity_input').val();
    let id = $(this).data('id');

    $.ajax({
        url: '/cart/add',
        data: {id: id, quantity: quantity},
        type: 'GET',
        success: function(res){
            res = JSON.parse(res);
            let text = "0";
            if(res.amount){
                text = res.amount + ', '+res.total;
            }
            $('#cart-data').html(text);

        },
        error: function(){
            alert('Error');
        }
    });
});
function update(e){
    setTimeout(function(){
        let quantity = $('.cart_info .quantity_input').val();
        let id = $('.cart_info .quantity_input').data('id');
        console.log('update', id, quantity);
        $.ajax({
            url: '/cart/add',
            data: {id: id, quantity: quantity},
            type: 'GET',
            success: function(res){
                //console.log('res', res);
                $('#page-content').html(res);
                updateMenuCart();
                disableCheckout();
            },
            error: function(){
                alert('Error');
            }
        });
    }, 100);

}
$('#page-content').on('change', '.quantity_input', update);
$('#page-content').on('click', '.cart_info .quantity_control',update);

$('#page-content').on('click', '.clear_cart_button a', function(e){
    console.log('clear');
    e.preventDefault();
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function(res){
            //$('#page-content').html(res);
            $('#page-content').html(res);
            $('#cart-data').html(0);
            disableCheckout();

        },
        error: function(){
            alert('Error');
        }
    });
});
$('#page-content').on('click', '.cart_info .delete-item', function(e){
    e.preventDefault();
    let id = $('.cart_info .quantity_input').data('id');
    $.ajax({
        url: '/cart/delete',
        data: {id: id, quantity: 0},
        type: 'GET',
        success: function(res){
            console.log('res', res);
            $('#page-content').html(res);
            updateMenuCart();
            disableCheckout();
        },
        error: function(){
            alert('Error');
        }
    });
});

function updateMenuCart(){
    amount = document.querySelector('#total-amout');
    sum = document.querySelector('.cart_total_value');
    console.log('amount', amount, 'sum', sum);
    if(amount){
        text = amount.textContent == 0 ? 0 : amount.textContent+', '+sum.textContent;
        $('#cart-data').html(text);
    }


}

$('.newsletter .newsletter_button').on('click', function(e){
    e.preventDefault();
    email = $('.newsletter_input').val();
    if(email){
        subscribe(email);
    }

});
function disableOn(e){
    e.preventDefault();
}

function disableCheckout(){
    let text = $('#cart-data').text();
    link = document.querySelector('.checkout_button a');
    if(link){
        if(text.length < 5){
            link.addEventListener('click', disableOn);
        }
        else {
            link.removeEventListener('click', disableOn);
        }
    }

}

function subscribe(email){
    $.ajax({
        url: '/subscribe/add',
        data: {email: email},
        type: 'GET',
        success: function(res){
            console.log('res', res);
        },
        error: function(){
            alert('Error');
        }
    });
}
