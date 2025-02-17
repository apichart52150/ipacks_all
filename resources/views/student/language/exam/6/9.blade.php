<style>
.mark, mark {
    padding: .2em;
    background-color: #ffc107;
}
</style>
@php
    $q1 = 'We have become so dependent on computers that it is hard to';
    $q11 = 'life without them.';
    $q111 = array(
        'imagine',
        'imagining',
        'imagination'
    );
    $q2 = 'Computers are expected to bring huge';
    $q22 = 'in the near future, too.';
    $q222 = array(
        'benefit',
        'benefits',
        'beneficial'
    );
    $q3 = 'There is an inevitability that technology will progress and become';
    $q33 = 'complex.';
    $q333 = array(
        'increased',
        'increasingly',
        'increasing'
    );
    $q4 = 'A number of factors relating to global warming can be';
    $q44 = '.';
    $q444 = array(
        'identify',
        'identification',
        'identified'
    );
    $q5 = 'There is much ';
    $q55 = 'nowadays as to whether or not relationships between family members is as close as before.';
    $q555 = array(
        'discuss',
        'discussing',
        'discussion'
    );
    $q6 = 'There has been a lot of';
    $q66 = "research recently into the causes of the so-called 'cot-death' syndrome.";
    $q666 = array(
        'science',
        'scientist',
        'scientific'
    );
    $q7 = 'Space';
    $q77 = 'has led to many useful innovations in our everyday lives.';
    $q777 = array(
        'explorers',
        'exploration',
        'exploring'
    );
    $q8 = 'Many people';
    $q88 = 'with spending large amounts of money on military equipment.';
    $q888 = array(
        'disagree',
        'disagreeing',
        'disagreement'
    );
    $q9 = 'The mass media tens to have a great';
    $q99 = "on people's opinions.";
    $q999 = array(
        'affect',
        'effect',
        'affection'
    );
    $q10 = 'It is likely that media influence will grow even';
    $q100 = ' in the future.';
    $q1000 = array(
        'strength',
        'stronger',
        'more strongly'
    );
@endphp
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card-box text-dark font-16">
            <p class="lead">
                {{$pageTitle['topic']}}
            </p>
            
            <div class="mb-2">
                <span class="font-weight-bold mr-2">1.</span>
                {{$q1}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q111[0]}}">{{$q111[0]}}</option>
                    <option value="{{$q111[1]}}">{{$q111[1]}}</option>
                    <option value="{{$q111[2]}}">{{$q111[2]}}</option>
                </select>
                {{$q11}}
            </div>
            
            <div class="mb-2">
                <span class="font-weight-bold mr-2">2.</span>
                {{$q2}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q222[0]}}">{{$q222[0]}}</option>
                    <option value="{{$q222[1]}}">{{$q222[1]}}</option>
                    <option value="{{$q222[2]}}">{{$q222[2]}}</option>
                </select>
                {{$q22}}
            </div>
            
            <div class="mb-2">
                <span class="font-weight-bold mr-2">3.</span>
                {{$q3}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q333[0]}}">{{$q333[0]}}</option>
                    <option value="{{$q333[1]}}">{{$q333[1]}}</option>
                    <option value="{{$q333[2]}}">{{$q333[2]}}</option>
                </select>
                {{$q33}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">4.</span>
                {{$q4}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q444[0]}}">{{$q444[0]}}</option>
                    <option value="{{$q444[1]}}">{{$q444[1]}}</option>
                    <option value="{{$q444[2]}}">{{$q444[2]}}</option>
                </select>
                {{$q44}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">5.</span>
                {{$q5}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q555[0]}}">{{$q555[0]}}</option>
                    <option value="{{$q555[1]}}">{{$q555[1]}}</option>
                    <option value="{{$q555[2]}}">{{$q555[2]}}</option>
                </select>
                {{$q55}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">6.</span>
                {{$q6}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q666[0]}}">{{$q666[0]}}</option>
                    <option value="{{$q666[1]}}">{{$q666[1]}}</option>
                    <option value="{{$q666[2]}}">{{$q666[2]}}</option>
                </select>
                {{$q66}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">7.</span>
                {{$q7}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q777[0]}}">{{$q777[0]}}</option>
                    <option value="{{$q777[1]}}">{{$q777[1]}}</option>
                    <option value="{{$q777[2]}}">{{$q777[2]}}</option>
                </select>
                {{$q77}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">8.</span>
                {{$q8}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q888[0]}}">{{$q888[0]}}</option>
                    <option value="{{$q888[1]}}">{{$q888[1]}}</option>
                    <option value="{{$q888[2]}}">{{$q888[2]}}</option>
                </select>
                {{$q88}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">9.</span>
                {{$q9}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q999[0]}}">{{$q999[0]}}</option>
                    <option value="{{$q999[1]}}">{{$q999[1]}}</option>
                    <option value="{{$q999[2]}}">{{$q999[2]}}</option>
                </select>
                {{$q99}}
            </div>

            <div class="mb-2">
                <span class="font-weight-bold mr-2">10.</span>
                {{$q10}}
                <select class="form-control d-inline w-auto mx-2">
                    <option value="">-Select-</option>
                    <option value="{{$q1000[0]}}">{{$q1000[0]}}</option>
                    <option value="{{$q1000[1]}}">{{$q1000[1]}}</option>
                    <option value="{{$q1000[2]}}">{{$q1000[2]}}</option>
                </select>
                {{$q100}}
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-md-12 col-sm-12" id="ans" style="display: none;">
        <div class="card-box text-dark font-16">
            <p class="lead">
                Answers
            </p>
            <div class="accordion mb-3" id="accordionExample">
                <div class="card mb-1" >
                    <div class="card-header" id="headingOne">
                        <h5 class="my-0">
                            <a class="text-primary" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1. {{$q1}} <u></u> {{$q11}}
                            </a>
                        </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-2"><i class="text-success mr-2">{{$q111[0]}}</i></dt>
                                    <dd class="col-sm-10">(infinitive): to form a picture in your mind
                                    <br><strong><mark>clues: to + infinitive</mark></strong></dd>
                                
                                    <dt class="col-sm-2">{{$q111[1]}}</dt>
                                    <dd class="col-sm-10">(gerund / present participle)</dd>

                                    <dt class="col-sm-2">{{$q111[2]}}</dt>
                                    <dd class="col-sm-10">(nc): the ability to form pictures in your mind</dd>
                                </dl>
                            </div>
                    </div>
                </div><!-- 1 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingTwo">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. {{$q2}} <u></u> {{$q22}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q222[1]}}</i></dt>
                                <dd class="col-sm-10">(plural noun): advantages, improvements 
                                <br><strong><mark>clues: adj + plural n = huge benefits</mark> <br> <mark>a + adj + singular n = a huge benefit</mark></strong></dd>

                                <dt class="col-sm-2">{{$q222[0]}}</dt>
                                <dd class="col-sm-10">(singular noun): an advantage, an improvement</dd>

                                <dt class="col-sm-2">{{$q222[2]}}</dt>
                                <dd class="col-sm-10">(adj): having a good effect</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 2 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingThree">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. {{$q3}} <u></u> {{$q33}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q333[1]}}</i></dt>
                                <dd class="col-sm-10">(adv): more and more all the time                                
                                <br><mark><strong>clues: become + adv + adj = become increasingly complex </strong></mark></dd>

                                <dt class="col-sm-2">{{$q333[0]}}</dt>
                                <dd class="col-sm-10">(vi, vt): became bigger in amount or degree</dd>

                                <dt class="col-sm-2">{{$q333[2]}}</dt>
                                <dd class="col-sm-10">(vi, vt): present participle: becoming bigger in amount or degree</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 3 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingFour">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4.{{$q4}} <u></u> {{$q44}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q444[2]}}</i></dt>
                                <dd class="col-sm-10">(vt): past participle:  to be recognized
                                    <ul class="list-unstyled mark font-weight-bold">
                                        <li>
                                            clues:
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    passive voice: can be + Vt past participle
                                                </li>
                                                <li>
                                                    active voice: can + vt infinitive + object
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </dd>

                                <dt class="col-sm-2">{{$q444[0]}}</dt>
                                <dd class="col-sm-10">(vt): to recognize and correctly name something</dd>

                                <dt class="col-sm-2">{{$q444[1]}}</dt>
                                <dd class="col-sm-10">(nc): official papers or cards</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 4 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingFive">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. {{$q5}} <u></u> {{$q55}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">

                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q555[2]}}</i> </dt>
                                <dd class="col-sm-10">(nu): debates, formal talks 
                                <br><mark><strong>clues: much + nu = much discussion</strong></mark></dd>

                                <dt class="col-sm-2">{{$q555[0]}}</dt>
                                <dd class="col-sm-10">(vt): to talk with someone to exchange ideas</dd>

                                <dt class="col-sm-2">{{$q555[1]}}</dt>
                                <dd class="col-sm-10">(vt): present participle/ gerund of “discuss”</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 5 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingSix">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6. {{$q6}} <u></u> {{$q66}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q666[2]}}</i></dt>
                                <dd class="col-sm-10">(adj): relating to science
                                <br><mark><strong>clues: adj + n = scientific research</strong></mark></dd>

                                <dt class="col-sm-2">{{$q666[0]}}</dt>
                                <dd class="col-sm-10">(nu): knowledge about the world</dd>

                                <dt class="col-sm-2">{{$q666[1]}}</dt>
                                <dd class="col-sm-10">(nc): a person who works or is trained in science</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 6 -->

                <div class="card mb-1">
                    <div class="card-header" id="headingSeven">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7. {{$q7}} <u></u> {{$q77}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q777[1]}}</i> </dt>
                                <dd class="col-sm-10">(nc): the act of finding out about something 
                                <br><mark><strong>clues: singular subject + has led</strong></mark></dd>

                                <dt class="col-sm-2">{{$q777[0]}}</dt>
                                <dd class="col-sm-10">(nc): people who travel through an unknown areas to find out about it</dd>

                                <dt class="col-sm-2">{{$q777[2]}}</dt>
                                <dd class="col-sm-10"> (vt): present participle / gerund of <em>"explore"</em></dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 7 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingEight">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                8. {{$q8}} <u></u> {{$q88}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q888[0]}}</i> </dt>
                                <dd class="col-sm-10">(vi): to have a different opinion from someone else
                                <br><mark><strong>clues: subject + vi + with = Many people + disagree + with</strong></mark></dd>

                                <dt class="col-sm-2">{{$q888[1]}}</dt>
                                <dd class="col-sm-10">(vi): present participle / gerund of “disagree” </dd>

                                <dt class="col-sm-2">{{$q888[2]}}</dt>
                                <dd class="col-sm-10">(nc): a situation when people express different opinions</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 8 -->

                <div class="card mb-1" >
                    <div class="card-header" id="headingNine">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                9. {{$q9}} <u></u> {{$q99}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q999[1]}}</i> </dt>
                                <dd class="col-sm-10">(nc): a change in someone's mind 
                                <br><mark><strong>clues: a great + nc + on something / someone</strong></mark></dd>

                                <dt class="col-sm-2">{{$q999[0]}}</dt>
                                <dd class="col-sm-10">(vt): to have influence on someone's situation</dd>

                                <dt class="col-sm-2">{{$q999[2]}}</dt>
                                <dd class="col-sm-10">(nu): a feeling of love and caring</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 9 -->

                <div class="card mb-1" id="ansOne">
                    <div class="card-header" id="headingTen">
                        <h5 class="my-0">
                            <a class="text-primary collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            10. {{$q10}} <u></u> {{$q100}}
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="text-success mr-2">{{$q1000[1]}}</i></dt>
                                <dd class="col-sm-10">(adj): more powerful
                                <br><mark><strong>clues: grow + even + comparative adjective</strong></mark></dd>

                                <dt class="col-sm-2">{{$q1000[0]}}</dt>
                                <dd class="col-sm-10">(nu): physical energy or power</dd>

                                <dt class="col-sm-2">{{$q1000[2]}}</dt>
                                <dd class="col-sm-10">(adv): more powerfully</dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- 10 -->
            </div>
            
        </div>  
    </div>
</div>

@section('button-control')
    <button id="check-answer" class="btn btn-info">Check Answers</button>
    <button id="show-answer" class="btn btn-success">Show Answers</button>
@endsection

@section('js')
<script>
     const answers = [
        'imagine', 
        'benefits', 
        'increasingly', 
        'identified', 
        'discussion', 
        'scientific', 
        'exploration', 
        'disagree',
        'effect', 
        'stronger'
    ];
    let score = 0;
    $("#show-answer").hide(true);

    $('#check-answer').on('click', function() {
        
        $('select').each((idx, item) => {
            $(item).parent().find('i').remove();
            $(item).removeClass('border-success');
            $(item).removeClass('border-danger');

            if($(item).val() == answers[idx]) {
                $(item).addClass('border border-success');
                $('<i class="fas fa-check text-success mr-2"></i>').insertAfter($(item));
                score++;
            } else {
                $(item).addClass('border border-danger');
                $(`<i class="fas fa-times text-danger mr-2"></i><span class="text-success mr-2">${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</span>`).insertAfter($(item));
            }
        })

        $('u').each((idx, item) => {
            if($(item).val() == answers[idx]) {
                $(`<span class="text-success"><u>${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</u></span>`).insertAfter($(item));
            } else {
                $(`<span class="text-success"><u>${Array.isArray(answers[idx]) ? answers[idx][1] : answers[idx]}</u></span>`).insertAfter($(item));
            }
        })

        if(score == 10){
            alert("you're awesome");
        }else{
            alert('Your score is ' + score + '/10');
        }

        $("#show-answer").show(true);
        $("#check-answer").hide(true);
    });

    $('#show-answer').on('click', function() {
        var x = document.getElementById("ans");
        if (x.style.display == "none") {
            $("#show-answer").text('close');
            x.style.display = "block";
        } else {
            $("#show-answer").text('Show Answers');
            x.style.display = "none";
        }
    });
   
</script>
@stop