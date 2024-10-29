<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante de Pago - Fashion Store</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            line-height: 1.6;
            color: #333;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .title {
            font-size: 18px;
            margin-top: 10px;
        }
        .details, .payment-info {
            margin-bottom: 20px;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
        }
        .barcode {
            text-align: center;
            margin: 20px 0;
        }
        .barcode img {
            max-width: 100%;
            height: auto;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
        }
        .divider {
            border-top: 1px dashed #ccc;
            margin: 15px 0;
        }

        .img-oxxo{
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .img{
            width: 150px;
            height: 75px;
        }

        .imagen{
            display: flex;
            margin-left: 115px;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">Ozez shop</div>
        <div class="title">Comprobante de Pago</div>
    </div>

    <div class="details">
        <div class="detail-row">
            <span>Fecha:</span>
            <span>29/10/2023</span>
        </div>
        <div class="detail-row">
            <span>Orden:</span>
            <span>#FS12345</span>
        </div>
        <div class="detail-row">
            <span>Total a Pagar:</span>
            <span>$1,299.00 MXN</span>
        </div>
    </div>

    <div class="divider"></div>

    <div class="payment-info">
        <div class="img-oxxo">
            <h3>Pago en OXXO</h3>
            <div class="imagen">
             <img class="img" src="{{asset('/img/oxxo.png')}}" alt="">
            </div>
        </div> 
        <p>Presenta este código en cualquier tienda OXXO para realizar tu pago:</p>
        <div class="barcode">
            <img src="{{asset('/img/codigo.jpg')}}" alt="Código de Barras OXXO">
            <p>1234 5678 9012 3456</p>
        </div>
    </div>

    <div class="divider"></div>

    <div class="payment-info">
        <h3>Transferencia Bancaria</h3>
        <div class="detail-row">
            <span>Banco:</span>
            <span>BBVA</span>
        </div>
        <div class="detail-row">
            <span>Titular:</span>
            <span>Ozez store</span>
        </div>
        <div class="detail-row">
            <span>CLABE:</span>
            <span>012345678901234567</span>
        </div>
        <div class="detail-row">
            <span>Referencia:</span>
            <span>FS12345</span>
        </div>
    </div>

    <div class="footer">
        <p>Este comprobante es válido por 48 horas.</p>
        <p>Para cualquier duda, contacta a ozez@gmail.com</p>
    </div>
</body>
</html>