@extends('front.user_master')
@section('user_content')

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home.user') }}">Home</a></li>
                <li>Alu - Alu</li>
            </ol>
            <h2>Alu - Alu</h2>
        </div>
    </section>

    <section id="alualu" class="alualu">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-6">
                    @auth
                    <button type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Buat Alu - Alu</button>
                    @else
                    <form action="{{ route('login') }}">
                        <button type="submit" class="button">Buat Alu Alu</button>
                    </form>
                    @endauth

                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        document.querySelector('form').addEventListener('submit', function(event) {
                            event.preventDefault(); // Prevent the form from submitting

                            swal({
                                title: "Login terlebih dahulu!",
                                text: "Anda harus login sebelum membuat Alu - Alu.",
                                icon: "warning",
                                button: "OK",
                            }).then(function() {
                                window.location.href = "{{ route('login') }}";
                            });
                        });
                    </script>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @auth
                                <form action="{{ route('store.alualuu') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Untuk Siapa:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="to">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Alu -Alu:</label>
                                            <textarea class="form-control" id="message-text" name="isi"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send message</button>
                                    </div>
                                </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12" style="height: 100%; max-height: calc(100vh - 150px); overflow-y: auto;">
                    <br>

                    <div class="row">

                        @foreach ($alualu as $item)
                            <div class="col-md-3 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <p href="">{{ $item->to }}</p>
                                    </h5>
                                    <p class="card-text">{!! $item->isi !!}</p>
                                    <div class="read-more"><i class="bi bi-pencil">&nbsp;</i>{{ $item->from }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
