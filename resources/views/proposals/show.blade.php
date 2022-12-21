   <x-layout> 
    <!--search overlay end-->
    <section class="single-block-wrapper section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 mb-5 mb-lg-0">
                        <article>
                            <h1 class="h2">{{ $project_name }}</h1>
                            <ul class="card-meta my-3 list-inline">
                                <li class="list-inline-item">
                                    <a
                                        href="author-single.html"
                                        class="card-meta-author"
                                    >
                                        <span>Freelancer: {{ $freelancer }}</span
                                        >
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>Bid: ${{ $proposal['bid'] }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>Expected by: {{
                                    $proposal['expected_by'] }}
                                </li>
                            </ul>
                            <div class="content">
                                <p>{{ $proposal['proposal'] }}</p>

                                <input
                                    class="btn btn-primary mt-2"
                                    type="submit"
                                    name="submit-contact"
                                    id="submit_contact"
                                    value="Accept Proposal"
                                />
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="mb-5 border-top mt-4 pt-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="card m-b-30">
                                            <div class="card-header">
                                                <div
                                                    class="row align-items-center"
                                                >
                                                    <div class="col-8">
                                                        <h5
                                                            class="card-title mb-0"
                                                        >
                                                            Important Files
                                                        </h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <ul
                                                            class="list-inline-group text-right mb-1 pl-0"
                                                        >
                                                            <li
                                                                class="list-inline-item mr-0 font-12"
                                                            >
                                                                <i
                                                                    class="feather icon-more-vertical- font-20 text-primary"
                                                                ></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="product-file-type">
                                                    <ul class="list-unstyled">
                                                        <li class="media mb-3">
                                                            <span
                                                                class="mr-3 align-self-center img-icon primary-rgba text-primary"
                                                                >.doc</span
                                                            >
                                                            <div
                                                                class="media-body"
                                                            >
                                                                <h5
                                                                    class="font-16 mb-1 d-inline"
                                                                >
                                                                    Marketing
                                                                    Guidelines
                                                                </h5>
                                                                <a
                                                                    href=""
                                                                    class="mx-2"
                                                                    ><i
                                                                        class="fa fa-download"
                                                                        aria-hidden="true"
                                                                    ></i
                                                                ></a>
                                                                <p>
                                                                    .doc, 5.3 MB
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="media mb-3">
                                                            <span
                                                                class="mr-3 align-self-center img-icon danger-rgba text-danger"
                                                                >.pdf</span
                                                            >
                                                            <div
                                                                class="media-body"
                                                            >
                                                                <h5
                                                                    class="font-16 mb-1"
                                                                >
                                                                    Annual Sales
                                                                    Report
                                                                    2018-19
                                                                    <a
                                                                        href=""
                                                                        class="mx-2"
                                                                        ><i
                                                                            class="fa fa-download"
                                                                            aria-hidden="true"
                                                                        ></i
                                                                    ></a>
                                                                </h5>
                                                                <p>
                                                                    .pdf, 10.5
                                                                    MB
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="media">
                                                            <span
                                                                class="mr-3 align-self-center img-icon info-rgba text-info"
                                                                >.zip</span
                                                            >
                                                            <div
                                                                class="media-body"
                                                            >
                                                                <h5
                                                                    class="font-16 mb-1"
                                                                >
                                                                    Brand
                                                                    Photography
                                                                    <a
                                                                        href=""
                                                                        class="mx-2"
                                                                        ><i
                                                                            class="fa fa-download"
                                                                            aria-hidden="true"
                                                                        ></i
                                                                    ></a>
                                                                </h5>
                                                                <p>
                                                                    .zip, 53.2
                                                                    MB
                                                                </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
   </x-layout>