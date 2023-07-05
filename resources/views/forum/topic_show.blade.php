<x-layout.forum>
    <x-slot name="content">
        <h1 class="mb-3">Название топика</h1>
        <div class="container">
            @each ('forum.topic_show_user_comment', $topic, 'topic')

            <div class="row mb-3">
                <div class="col-12 d-flex justify-content-end">
                    <span>Страница:</span>
                    @each ('forum.topic_show_pagination', $topic, 'topic')
                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-12">
                    <form>
                        <div class="mb-3">
                            <label for="message" class="form-label mt-3">Сообщение:</label>
                            <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout.forum>
