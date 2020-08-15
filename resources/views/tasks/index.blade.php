@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    @if (Auth::check())
    <h1>タスク一覧</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->status}}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! link_to_route('tasks.create', '作成ページ', [], ['class' => 'btn btn-primary']) !!}
    @else
        {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
    @endif

@endsection