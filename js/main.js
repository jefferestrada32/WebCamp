// Se ejecuta despues de que carga todo el html
(function() {
    'use strict';
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {

        // Datos de usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var emial = document.getElementById('email');

        // Campos pases
        var pase_dia = document.getElementById('pase-dia');
        var pase_completo = document.getElementById('pase-completo');
        var pase_dosDias = document.getElementById('pase-dos-dias');

        // Botones y divs
        var calcular = document.getElementById('calcular');
        var error_div = document.getElementById('error');
        var btnRegistro = document.getElementById('btnRegistro');
        var resultado = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        // Extras
        var cantStickers = document.getElementById('sticker-evento');
        var cantCamisas = document.getElementById('camisa-evento');

        calcular.addEventListener('click', calcularTotal);
        pase_dia.addEventListener('change', mostrarDias);
        pase_dosDias.addEventListener('change', mostrarDias);
        pase_completo.addEventListener('change', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        emial.addEventListener('blur', validarCampos);

        function validarCampos(event) {
            if (this.value == '') {
                error_div.style.display = 'block';
                error_div.innerHTML = "Este campo es obligatorio";
            } else {
                error_div.style.display = 'none';
            }
        }

        function calcularTotal(event) {
            event.preventDefault();
            if (regalo.value == '') {
                alert('Debes de elegir un regalo');
                regalo.focus();
            } else {
                if (pase_dia.value == 0 && pase_dosDias.value == 0 && pase_completo.value == 0) {
                    alert('Debe de elegir al menos un pase para el evento')
                } else {
                    var totalPagar = (pase_dia.value * 30) + (pase_dosDias.value * 45) + (pase_completo.value * 50) + ((cantCamisas.value * 10) * 0.93) + (cantStickers.value * 2);

                    var listaProductos = [];

                    if (pase_dia.value >= 1) {
                        listaProductos.push('x' + pase_dia.value + ' Pase por día');
                    }

                    if (pase_dosDias.value >= 1) {
                        listaProductos.push('x' + pase_dosDias.value + ' Pase por dos días');
                    }

                    if (pase_completo.value >= 1) {
                        listaProductos.push('x' + pase_completo.value + ' Pase completo');

                    }

                    if (cantCamisas.value >= 1) {
                        listaProductos.push('x' + cantCamisas.value + ' Camisas');
                    }

                    if (cantStickers.value >= 1) {
                        listaProductos.push('x' + cantStickers.value + ' Stickers');
                    }

                    resultado.innerHTML = '';
                    for (var i = 0; i < listaProductos.length; i++) {
                        resultado.innerHTML += listaProductos[i] + '<br/>'
                    }
                    suma.innerHTML = totalPagar.toFixed(2) + '<span> COP </span>';
                }
            }
        } // Cierre de funcion calcular


        function mostrarDias(event) {
            let diasElegidos = [];

            if (pase_dia.value >= 1) {
                diasElegidos.push('viernes');
            }

            if (pase_dosDias.value >= 1) {
                diasElegidos.push('viernes', 'sabado');
            }

            if (pase_completo.value >= 1) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }
    });

})();



$(function() {

    // Programa  del evento
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        var enlace = $(this).attr('href');
        $('.ocultar').fadeOut();
        $(enlace).fadeIn();
        return false;
    })

    // animar los numeros
    let verificarScroll = 0;
    $(window).bind('scroll', function() {
        if ($(window).scrollTop() >= $('.invitados').offset().top + $('.invitados').outerHeight() - window.innerHeight) {
            if (verificarScroll == 0) {
                verificarScroll = 1;
                $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 2500);
                $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 2500);
                $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 2500);
                $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 12 }, 2500);
            }
        }
    });

    // cuenta regresiva
    $('.cuenta-regresiva').countdown('2020/10/10', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });






});