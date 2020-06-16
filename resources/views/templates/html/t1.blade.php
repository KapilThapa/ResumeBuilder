<div id="cv">
    <div class="mainDetails">
        <div id="name">
            <h1>{{$data['basic']['name']}}</h1>
            <h2>{{$data['work']['position']}}</h2>
        </div>

        <div id="contactDetails">
            <ul>
                <li>E-mail: <a href="mailto:{{$data['basic']['email']}}" target="_blank">{{$data['basic']['email']}}</a></li>
                <li>Phone: {{$data['basic']['phone']}}</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div id="mainArea">
        <section>
            <article>
                <div class="sectionTitle">
                    <h1>Personal Profile</h1>
                </div>

                <div class="sectionContent">
                    <p>{{$data['summary']['summary']}}</p>
                </div>
            </article>
            <div class="clear"></div>
        </section>
        <section>
            <div class="sectionTitle">
                <h1>Work Experience</h1>
            </div>

            <div class="sectionContent">
                <article>
                    <h2>{{$data['work']['position']}} at {{$data['work']['company']}}</h2>
                    <p class="subDetails">{{$data['work']['startDate']}} - {{$data['work']['endDate']}}</p>
                    <div>{{$data['work']['address']}}</div>
                    <div>{{$data['work']['summary']}}</div>
                </article>
            </div>
            <div class="clear"></div>
        </section>
        <section>
            <div class="sectionTitle">
                <h1>Key Skills</h1>
            </div>
            <div class="sectionContent">
                <ul class="keySkills">
                    <li><strong>{{$data['skill']['name']}}</strong> - {{$data['skill']['level']}}</li>
                </ul>
            </div>
            <div class="clear"></div>
        </section>
        <section>
            <div class="sectionTitle">
                <h1>Education</h1>
            </div>
            <div class="sectionContent">
                <article>
                    <h2>{{$data['education']['institution']}}</h2>0
                    <p class="subDetails">{{$data['education']['address']}}</p>
                    <p>{{$data['education']['area']}} with <strong>{{$data['education']['gpa']}} GPA</strong></p>
                </article>
            </div>
            <div class="clear"></div>
        </section>
    </div>
</div>