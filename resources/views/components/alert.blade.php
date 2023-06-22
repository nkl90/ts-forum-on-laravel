<div style="
        background-color: red;
        min-width: 100px;
        min-height: 100px;
        color: white;
        text-align: center;
        vertical-align: middle" {{ $attributes }}
>
    <div>{{ $text ?? 'Default text' }}</div>
    <div style="color: aquamarine; font-size: 18px">{{ $hash ?? '' }}</div>
    <div>{{ $smallDescription }}</div>
    <div>{{ $randomDigit() }}</div>
    <div>{{ $lessThanFive($text) ? 'TRUE' : 'FALSE' }}</div>
    {{ $slot }}
    <br><br><br>
    <div class="alert-title">{{ $title }}</div>
</div>
