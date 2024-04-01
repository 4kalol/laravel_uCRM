<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語ファイル
    |--------------------------------------------------------------------------
    |
    | 以下の言語ファイルには、バリデータクラスで使用されるデフォルトのエラーメッセージが含まれています。
    | これらのルールのいくつかには、サイズルールのように複数のバージョンがあります。
    | 各メッセージを自由に調整してください。
    |
    */

    'accepted' => ':attribute は受け入れる必要があります。',
    'accepted_if' => ':attribute は :other が :value の場合に受け入れる必要があります。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は :date より後の日付でなければなりません。',
    'after_or_equal' => ':attribute は :date 以降の日付でなければなりません。',
    'alpha' => ':attribute は文字のみを含む必要があります。',
    'alpha_dash' => ':attribute は文字、数字、ダッシュ、アンダースコアのみを含む必要があります。',
    'alpha_num' => ':attribute は文字と数字のみを含む必要があります。',
    'array' => ':attribute は配列である必要があります。',
    'ascii' => ':attribute は単一バイトの英数字および記号のみを含む必要があります。',
    'before' => ':attribute は :date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は :date 以前の日付でなければなりません。',
    'between' => [
        'array' => ':attribute は :min から :max 個のアイテムを持つ必要があります。',
        'file' => ':attribute は :min から :max キロバイトの間でなければなりません。',
        'numeric' => ':attribute は :min から :max の間でなければなりません。',
        'string' => ':attribute は :min から :max 文字の間でなければなりません。',
    ],
    'boolean' => ':attribute フィールドは true または false でなければなりません。',
    'confirmed' => ':attribute の確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attribute は有効な日付ではありません。',
    'date_equals' => ':attribute は :date と同じ日付でなければなりません。',
    'date_format' => ':attribute は :format 形式と一致しません。',
    'decimal' => ':attribute は :decimal つの小数桁を持たなければなりません。',
    'declined' => ':attribute は拒否する必要があります。',
    'declined_if' => ':other が :value の場合、:attribute は拒否する必要があります。',
    'different' => ':attribute と :other は異なる必要があります。',
    'digits' => ':attribute は :digits 桁でなければなりません。',
    'digits_between' => ':attribute は :min から :max 桁の間でなければなりません。',
    'dimensions' => ':attribute は無効な画像サイズです。',
    'distinct' => ':attribute フィールドに重複した値があります。',
    'doesnt_end_with' => ':attribute は次のいずれかで終わってはいけません: :values。',
    'doesnt_start_with' => ':attribute は次のいずれかで始まってはいけません: :values。',
    'email' => ':attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => ':attribute は次のいずれかで終わる必要があります: :values。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => ':attribute はファイルである必要があります。',
    'filled' => ':attribute フィールドは値を持っている必要があります。',
    'gt' => [
        'array' => ':attribute は :value 個より多くのアイテムを持つ必要があります。',
        'file' => ':attribute は :value キロバイトより大きくなければなりません。',
        'numeric' => ':attribute は :value より大きくなければなりません。',
        'string' => ':attribute は :value 文字より大きくなければなりません。',
    ],
    'gte' => [
        'array' => ':attribute は :value 個以上のアイテムを持つ必要があります。',
        'file' => ':attribute は :value キロバイト以上でなければなりません。',
        'numeric' => ':attribute は :value 以上でなければなりません。',
        'string' => ':attribute は :value 文字以上でなければなりません。',
    ],
    'image' => ':attribute は画像である必要があります。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute フィールドは :other に存在しません。',
    'integer'=> ':attribute は整数でなければなりません。',
    'ip' => ':attribute は有効なIPアドレスでなければなりません。',
    'ipv4' => ':attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attribute は有効なIPv6アドレスでなければなりません。',
    'json' => ':attribute は有効なJSON文字列でなければなりません。',
    'lowercase' => ':attribute は小文字でなければなりません。',
    'lt' => [
        'array' => ':attribute は :value 個未満のアイテムを持つ必要があります。',
        'file' => ':attribute は :value キロバイト未満でなければなりません。',
        'numeric' => ':attribute は :value より小さくなければなりません。',
        'string' => ':attribute は :value 文字未満でなければなりません。',
    ],
    'lte' => [
        'array' => ':attribute は :value 個以上のアイテムを持つ必要がありません。',
        'file' => ':attribute は :value キロバイト以下でなければなりません。',
        'numeric' => ':attribute は :value 以下でなければなりません。',
        'string' => ':attribute は :value 文字以下でなければなりません。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attribute は :max 個以上のアイテムを持つことはできません。',
        'file' => ':attribute は :max キロバイトを超えることはできません。',
        'numeric' => ':attribute は :max より大きくなければなりません。',
        'string' => ':attribute は :max 文字を超えることはできません。',
    ],
    'max_digits' => ':attribute は :max 桁を超えることはできません。',
    'mimes' => ':attribute は次のタイプのファイルでなければなりません: :values。',
    'mimetypes' => ':attribute は次のタイプのファイルでなければなりません: :values。',
    'min' => [
        'array' => ':attribute は少なくとも :min 個のアイテムを持つ必要があります。',
        'file' => ':attribute は少なくとも :min キロバイトでなければなりません。',
        'numeric' => ':attribute は少なくとも :min でなければなりません。',
        'string' => ':attribute は少なくとも :min 文字でなければなりません。',
    ],
    'min_digits' => ':attribute は少なくとも :min 桁でなければなりません。',
    'missing' => ':attribute フィールドが不足しています。',
    'missing_if' => ':other が :value の場合、:attribute フィールドが不足しています。',
    'missing_unless' => ':other が :value でない限り、:attribute フィールドが不足しています。',
    'missing_with' => ':values が存在する場合、:attribute フィールドが不足しています。',
    'missing_with_all' => ':values が存在する場合、:attribute フィールドが不足しています。',
    'multiple_of' => ':attribute は :value の倍数でなければなりません。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute の形式が無効です。',
    'numeric' => ':attribute は数値でなければなりません。',
    'password' => [
        'letters' => ':attribute には少なくとも1つの文字を含める必要があります。',
        'mixed' => ':attribute には少なくとも1つの大文字と1つの小文字を含める必要があります。',
        'numbers' => ':attribute には少なくとも1つの数字を含める必要があります。',
        'symbols' => ':attribute には少なくとも1つの記号を含める必要があります。',
        'uncompromised' => '指定された :attribute はデータリークに現れています。別の :attribute を選択してください。',
    ],
    'present' => ':attribute フィールドが存在する必要があります。',
    'prohibited' => ':attribute フィールドは禁止されています。',
    'prohibited_if' => ':other が :value の場合、:attribute フィールドは禁止されています。',
    'prohibited_unless' => ':other が :values でない限り、:attribute フィールドは禁止されています。',
    'prohibits' => ':attribute フィールドは :other の存在を禁止します。',
    'regex' => ':attribute の形式が無効です。',
    'required' => ':attribute フィールドは必須です。',
    'required_array_keys' => ':attribute フィールドには、次のエントリが含まれている必要があります: :values。',
    'required_if' => ':other が :value の場合、:attribute フィールドは必須です。',
    'required_if_accepted' => ':other が受け入れられた場合、:attribute フィールドは必須です。',
    'required_unless' => ':other が :values に含まれていいる場合、:attribute フィールドは必須です。',
    'required_with' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_with_all' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_without' => ':values が存在しない場合、:attribute フィールドは必須です。',
    'required_without_all' => ':values がすべて存在しない場合、:attribute フィールドは必須です。',
    'same' => ':attribute と :other は一致する必要があります。',
    'size' => [
    'array' => ':attribute は :size 個のアイテムを含む必要があります。',
    'file' => ':attribute は :size キロバイトでなければなりません。',
    'numeric' => ':attribute は :size でなければなりません。',
    'string' => ':attribute は :size 文字でなければなりません。',
    ],
    'starts_with' => ':attribute は次のいずれかで始まる必要があります: :values。',
    'string' => ':attribute は文字列でなければなりません。',
    'timezone' => ':attribute は有効なタイムゾーンでなければなりません。',
    'unique' => ':attribute は既に使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'uppercase' => ':attribute は大文字でなければなりません。',
    'url' => ':attribute は有効なURLでなければなりません。',
    'ulid' => ':attribute は有効なULIDでなければなりません。',
    'uuid' => ':attribute は有効なUUIDでなければなりません。',
    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語ファイル
    |--------------------------------------------------------------------------
    |
    | ここでは、ルールに名前を付けるために「属性名.ルール名」という規則を使用して、属性の特定のカスタム言語行を指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性
    |--------------------------------------------------------------------------
    |
    | 次の言語行は、メッセージをより表現豊かにするために、属性プレースホルダをより読みやすいものに交換します。
    |
    */

    'attributes' => [
        'title' => '件名',
        'content' => '本文',
        'name' => '名',
        'memo' => 'メモ',
        'price' => '料金',
    ],
];

