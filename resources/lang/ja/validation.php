<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attributeを承認してください。',
    'active_url' => ':attributeには有効なURLを指定してください。',
    'after' => ':attributeには:date以降の日付を指定してください。',
    'after_or_equal' => ':attributeには:dateかそれ以降の日付を指定してください。',
    'alpha' => ':attributeには英字のみからなる文字列を指定してください。',
    'alpha_dash' => ':attributeには英数字・ハイフン・アンダースコアのみからなる文字列を指定してください。',
    'alpha_num' => ':attributeには英数字のみからなる文字列を指定してください。',
    'array' => ':attributeには配列を指定してください。',
    'before' => ':attributeには:date以前の日付を指定してください。',
    'before_or_equal' => ':attributeには:dateかそれ以前の日付を指定してください。',
    'between' => [
        'numeric' => ':attributeには:min〜:maxまでの数値を指定してください。',
        'file' => ':attributeには:min〜:max KBのファイルを指定してください。',
        'string' => ':attributeには:min〜:max文字の文字列を指定してください。',
        'array' => ':attributeには:min〜:max個の要素を持つ配列を指定してください。',
    ],
    'boolean' => ':attributeには真偽値を指定してください。',
    'confirmed' => ':attributeが確認用の値と一致しません。',
    'date' => ':attributeには正しい形式の日付を指定してください。',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => '":format"という形式の日付を指定してください。',
    'different' => ':attributeには:otherとは異なる値を指定してください。',
    'digits' => ':attributeには:digits桁の数値を指定してください。',
    'digits_between' => ':attributeには:min〜:max桁の数値を指定してください。',
    'dimensions' => ':attributeの画像サイズが不正です。',
    'distinct' => '指定された:attributeは既に存在しています。',
    'email' => ':attributeには正しい形式のメールアドレスを指定してください。',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => '指定された:attributeは存在しません。',
    'file' => ':attributeにはファイルを指定してください。',
    'filled' => ':attributeには空でない値を指定してください。',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attributeには画像ファイルを指定してください。',
    'in' => ':attributeには:valuesのうちいずれかの値を指定してください。',
    'in_array' => ':attributeが:otherに含まれていません。',
    'integer' => ':attributeには整数を指定してください。',
    'ip' => ':attributeには正しい形式のIPアドレスを指定してください。',
    'ipv4' => ':attributeには正しい形式のIPv4アドレスを指定してください。',
    'ipv6' => ':attributeには正しい形式のIPv6アドレスを指定してください。',
    'json' => ':attributeには正しい形式のJSON文字列を指定してください。',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attributeには:max以下の数値を指定してください。',
        'file' => ':attributeには:max KB以下のファイルを指定してください。',
        'string' => ':attributeには:max文字以下の文字列を指定してください。',
        'array' => ':attributeには:max個以下の要素を持つ配列を指定してください。',
    ],
    'mimes' => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'mimetypes' => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'min' => [
        'numeric' => ':attributeには:min以上の数値を指定してください。',
        'file' => ':attributeには:min KB以上のファイルを指定してください。',
        'string' => ':attributeには:min文字以上の文字列を指定してください。',
        'array' => ':attributeには:min個以上の要素を持つ配列を指定してください。',
    ],
    'not_in' => ':attributeには:valuesのうちいずれとも異なる値を指定してください。',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attributeには数値を指定してください。',
    'password' => '正しいパスワードを入力してください。',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => ':attributeは必須です。',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => ':attributeが:otherと一致しません。',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => ':attributeには文字列を指定してください。',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'その:attributeはすでに使われています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeには正しい形式のURLを指定してください。',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
      "name" => "お名前",
      "ruby" => "フリガナ",
      "address" => "住所",
      "tenant" => "マンション・アパート名",
      "email" => "メールアドレス",
      "password" => "パスワード",
    ],

];
