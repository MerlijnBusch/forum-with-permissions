@extends('layouts.main')

@section('content')
    <div class="home-category">
        <div class="home-category-main">
            <div> regulair post:</div>
            <div>
                <div>Hot</div>
                <div>New</div>
                <div>Top</div>
                <div>Rising</div>
                <div>
                    <div>card</div>
                </div>
            </div>

            <div class="home-category-post-container">
                <div class="home-category-post-votes">
                    <div class="home-category-post-chevron-up">
                        arrow up
                    </div>
                    <div class="home-category-post-amount">
                        51.8k
                    </div>
                    <div class="home-category-post-chevron-down">
                        arrow down
                    </div>
                </div>
                <div class="home-category-post">
                    <div class="home-category-post-category">
                        <div class="home-category-post-category-name">
                            name category then some user name
                        </div>
                        <div class="home-category-post-category-join">
                            join category
                        </div>
                    </div>
                    <div class="home-category-post-view">
                        <div class="home-category-post-view-title">
                            Dit is een titel
                        </div>
                        <div class="home-category-post-view-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, rehomeing essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions
                            of
                            Lorem Ipsum
                        </div>
                    </div>
                    <div class="home-category-post-view-action">
                        <div class="home-category-post-view-comments">
                            395 comments
                        </div>
                        <div class="home-category-post-view-share">
                            share
                        </div>
                        <div class="home-category-post-view-save">
                            save
                        </div>
                        <div class="home-category-post-view-hide">
                            hide
                        </div>
                        <div class="home-category-post-view-report">
                            report
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-category-side-nav">

        </div>
    </div>
@endsection