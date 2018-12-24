<template>
    <div class="container">
        <section id="main-content">
            <section class="wrapper">
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol terques">
                                <i class="icon-user"></i>
                            </div>
                            <div class="value">
                                <h1>22</h1>
                                <p>کاربر جدید</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol red">
                                <i class="icon-user"></i>
                            </div>
                            <div class="value">
                                <h1>140</h1>
                                <p>معلمین</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol yellow">
                                <i class="icon-user"></i>
                            </div>
                            <div class="value">
                                <h1>345</h1>
                                <p>دانش آموزان</p>
                            </div>
                        </section>
                    </div>

                </div>
                <!--state overview end-->
            </section>
        </section>    </div>
</template>

<script>
    import studencom from "../components/StudentPanel.vue";
    import teachercom from "../components/TeacherPanel.vue";
    import admincomp from "../components/AdminPanel.vue";

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            'admincomp': admincomp,
            'teachercom': teachercom,
            'admincomp': admincomp,
        }
    }
</script>
