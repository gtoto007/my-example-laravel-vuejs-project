<script>
    export default {
        props: ['applicationsprop'],

        data() {
            return {
                applications: [],
            };
        },
        created() {
            this.applications = this.applicationsprop;
        },
        methods: {
            acceptApplication(application) {
                axios.post('/ajax/applications/accept_application', {
                    id: application.id
                }).then(function (response) {
                    application.accepted = 1;
                })
            },
            refuseApplication(application) {
                axios.post('/ajax/applications/refuse_application', {
                    id: application.id
                }).then(function (response) {
                    application.accepted = 0;
                })
            }
        }
    }
</script>