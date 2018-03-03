<div class="section">
    <div class="container">
        <div class="section-information">
            <h2>{{ $algorithm->getName() }}</h2>
            <p>Use the {{ $algorithm->getName() }} hash algorithm on your strings.</p>
        </div>
        <form method="post" action="/algorithm/{{ $algorithm->getSlug() }}" id="algorithm-form">
            <div class="form-group">
                <input type="text" name="salt" placeholder="salt (optional)" class="form-control input-lg" value="{{ $salt or '' }}">
            </div>

            <div class="form-group">
                <textarea name="string" placeholder="string" class="form-control input-lg">{{ $string }}</textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-blue btn-lg">{{ $algorithm->getName() }} my string</button>
        </form>
    </div>
</div>