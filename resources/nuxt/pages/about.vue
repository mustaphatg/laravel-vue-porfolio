<template>
    <div class="lg:p-10 p-6 mb-10">
        <h2
            class="text-center lg:text-3xl text-blue-300 my-4"
            style="font-family: cursive"
        >
            About Me
        </h2>

        <img
            height="200"
            width="200"
            class="mustapha_i rounded-lg border border-1 border-sky-900"
            src="~/assets/musty4.jpg"
            alt="Mustapha"
        />

        <p class="font-mono lg:text-lg">
            I have 4 years of web development experience and am an advocate of
            the LAMP stack technology and use PHP on a daily basis.

            <br /><br />
            My journey into web development began when I was an animator.
            Blender, the software I use to create 3D animations, was written in
            Python and C++. As a young adult who is constantly learning new
            things, I spent my free time learning Python and C++. After 5 months
            of studying Python and the fundamentals of C++, I chose Django as my
            framework of choice and proceeded to develop numerous basic websites
            in Python/Django.

            <br /><br />
            Learning how to create websites in Python made me to fall in love
            with programming, and as a result, I decided to abandon animation
            and focus solely on programming.

            <br /><br />
            I discovered PHP while researching other backend technologies and
            immediately fell in love with it. Since then, I've been studying PHP
            and its surrounding ecosystem.

            <br /><br />
            As a skilled PHP developer, I can currently create backend solutions
            using PHP, Laravel, Mysql, and Postgresql. Using Reactjs or vuejs, I
            can work on the front end as well.

            <br /><br />
            Over the years, I have dabbled across different technologies, just
            for the fun of learning it but most importantly in other to be
            knowledgeable about how different technologies can be integrated
            together so as to provide complete solutions to the rapid-growing
            world of web development.
        </p>
        <br />

        <h3 class="my-4 lg:text-xl underline">
            Below are the technologies I currently have under my toolbet:
        </h3>

        <div class="overflow-x-auto border rounded" data-theme="light">
            <table class="table w-full">
                <!-- head -->
                <thead class="bg-indigo-200">
                    <tr >
                        <th>Backend</th>
                        <th>Frontend</th>
                        <th>Concept</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td>PHP / Laravel</td>
                        <td>HTML</td>
                        <td>OOP</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td>Nodejs / Express</td>
                        <td>Javascript</td>
                        <td>Solid Design principles</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <td>Python</td>
                        <td>Reactjs</td>
                        <td>Clean code</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Vuejs</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style scoped>
.mustapha_i {
    float: left;
    margin: 0 15px 0 0;
}
</style>
