<div id="inner">
    <div id="hd">
        <div class="yui-gc">
            <div class="yui-u first">
                <h1>{{$data['basic']['name']}}</h1>
                <h2>{{$data['work']['position']}}</h2>
            </div>
            <div class="yui-u">
                <div class="contact-info">
                    <h3><a href="mailto:{{$data['basic']['email']}}">{{$data['basic']['email']}}</a></h3>
                    <h3>{{$data['basic']['phone']}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="bd">
        <div id="yui-main">
            <div class="yui-b">
                <div class="yui-gf">
                    <div class="yui-u first">
                        <h2>Profile</h2>
                    </div>
                    <div class="yui-u">
                        <p class="enlarge">
                            {{$data['summary']['summary']}}
                        </p>
                    </div>
                </div>
                <div class="yui-gf">
                    <div class="yui-u first">
                        <h2>Skills</h2>
                    </div>
                    <div class="yui-u">
                        <div class="talent">
                            <h2>{{$data['skill']['name']}}</h2>
                            <p>{{$data['skill']['level']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="yui-gf">
                    <div class="yui-u first">
                        <h2>Experience</h2>
                    </div>
                    <div class="yui-u">
                        <div class="job">
                            <h2>{{$data['work']['company']}}</h2>
                            <h3>{{$data['work']['position']}}</h3>
                            <h4>{{$data['work']['startDate']}} - {{$data['work']['endDate']}}</h4>
                            <div>{{$data['work']['address']}}</div>
                            <div>{{$data['work']['summary']}}</div>
                        </div>
                    </div>
                </div>
                <div class="yui-gf last">
                    <div class="yui-u first">
                        <h2>Education</h2>
                    </div>
                    <div class="yui-u">
                        <h2>{{$data['education']['institution']}}</h2>
                        <h3>{{$data['education']['address']}}</h3>
                        <h3>{{$data['education']['area']}}<strong>{{$data['education']['gpa']}} GPA</strong> </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="ft">
        <p>{{$data['basic']['name']}} &mdash; <a href="mailto:{{$data['basic']['email']}}">{{$data['basic']['email']}}</a> &mdash; {{$data['basic']['phone']}}</p>
    </div>
</div>