<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>Оплата через Vipps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: linear-gradient(135deg, #ffe9f0, #e4f1ff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vipps-wrapper {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px 28px;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 10px 28px rgba(15, 23, 42, 0.16);
        }

        .vipps-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .vipps-subtitle {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 20px;
        }

        .vipps-label {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #9ca3af;
            margin-bottom: 6px;
        }

        .vipps-number {
            font-size: 26px;
            font-weight: 700;
            color: #ff5b24;
            margin-bottom: 18px;
        }

        .vipps-steps {
            font-size: 14px;
            color: #374151;
            margin-bottom: 20px;
        }

        .vipps-steps ol {
            padding-left: 18px;
            margin: 0;
        }

        .vipps-note {
            font-size: 13px;
            color: #6b7280;
            background: #f9fafb;
            border-radius: 10px;
            padding: 10px 12px;
            margin-bottom: 18px;
        }

        .vipps-footer {
            display: flex;
            justify-content: flex-end;
        }

        .back-btn {
            padding: 10px 18px;
            border-radius: 8px;
            border: none;
            background-color: #111827;
            color: #ffffff;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.15s ease, transform 0.15s ease;
        }

        .back-btn:hover {
            background-color: #020617;
            transform: translateY(-1px);
        }

        .back-btn:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
<div class="vipps-wrapper">
    <div class="vipps-title">Оплата квитка через Vipps</div>
    <div class="vipps-subtitle">
        Тимчасовий спосіб оплати. Після переказу, будь ласка, підтвердіть оплату.
    </div>

    <div class="vipps-label">Номер Vipps для оплати</div>
    <div class="vipps-number">Vipps #942467</div>

    <div class="vipps-steps">
        <ol>
            <li>Відкрийте застосунок <strong>Vipps</strong> на телефоні.</li>
            <li>Обиріть «Заплатити» та введіть номер <strong>123456</strong>.</li>
            <li>Вкажіть суму квитка та призначення платежу (імʼя / e-mail).</li>
            <li>Підтвердіть оплату.</li>
        </ol>
    </div>

    <div class="vipps-note">
        Після оплати, будь ласка, надішліть скрін або номер транзакції на наш e-mail чи в месенджер, щоб ми підтвердили ваш квиток.
    </div>

    <div class="vipps-footer">
        <button class="back-btn" onclick="window.history.back()">
            Назад до квитків
        </button>
    </div>
</div>
</body>
</html>
