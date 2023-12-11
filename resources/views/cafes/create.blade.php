<x-app-layout>
    <h1>レビュー投稿</h1>
        <!--From領域：サーバ側に送信する入力項目データを扱う。
        　Fromタグ（<from>）で定義し、action属性とmethod属性を指定する-->
        <!--action属性：リクエストを送信するURIを定義する。-->
        <!--method属性：HTTPリクエストのメソッドを指定する。
        　　REVIEWメソッド：-->
        <form action="/cafes/{{$cafe ->id}}" method="REVIEW">
            <!--CSRFトークンフィールド（クロス・サイト・リクエスト・フォージェリ）
            　　：セキュリティの脅威からアプリケーションを守るために、CSRFトークンを発行し、
            　　　そのトークン情報をリクエスト時に一緒に送信することで、リクエストを検証する。
            　　　LaravelのBladeでFromタグを使用する際は必須です。-->
            @csrf
            <div class="title">
                <h2>Title</h2>
                <!--タイトル入力用テキストボックス
                　　改行が不要で、選択肢が不要な場合は基本的にInputタグを利用する。
                　　type属性：要素の型を指定（指定しない場合はtext）
                　　name属性：サーバ側で扱うキーを指定
                　　placeholder属性：入力内容の説明を指定（必須ではない）
                　　oldはグローバル変数で、その後ろの送信したキーを入力 
                -->
                <input type="text" name="review[title]" placeholder="タイトル" value="{{ old('review.title') }}"/>
                <!--
                $errorsにバリデーションエラーが格納され、Viewに返却される。
                firstの引数にキー名を入力することで当該キーのバリデーションエラーを取得-->
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <!--内容入力用テキストエリア
                　　改行が可能で、選択肢が不要な場合はtexyareaタグを利用する-->
                <textarea name="review[body]" placeholder="レビュー内容">{{ old('review.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <div class="stars">
                <h2>Stars</h2>
                <!--number:数値の入力-->
                <input type="number" name="review[stars]" placeholder="評価" value="{{ old('review.stars') }}"/>
                <p class="stars__error" style="color:red">{{ $errors->first('review.stars') }}</p>
            </div>
            <!--submit:送信ボタン
                value属性：表示する初期値を指定-->
            <input type="submit" value="store"/>
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>