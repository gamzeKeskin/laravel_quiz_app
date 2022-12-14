<x-app-layout>
    <x-slot name="header">Quiz Güncelle</x-slot>
    
    <div class="card">
        <div class="card-body">
            <form method="POST" action=" {{route('quizzes.update', $quiz->id)}} ">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$quiz->title}}">
                </div>
                <div class="form-group">
                    <label>Quiz Açıklaması</label>
                    <textarea name="description" class="form-control" rows="4">{{$quiz->description}}</textarea>
                </div>

                <div id="finishedInput" @if(!$quiz->finished_at)  class="form-group @endif">
                    <label>Bitiş Tarihi</label>
                    <input type="datetime-local" @if($quiz->finished_at) value="{{ date('Y-m-d\TH:i', strtotime($quiz->finished_at))}}" @endif name="finished_at"  class="form-control" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sn btn-block">Quiz Güncelle</button>
                </div>
            </form>
        </div>
    </div>
    <x-slot name="js">
        <script>
            $('#isFinished').change(function() {
                if ($('#isFinished').is(':checked')) {
                    $('#finishedInput').show();
                } else {
                    $('#finishedInput').hide();
                }
            })
        </script>
    </x-slot>
</x-app-layout>