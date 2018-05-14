
<script>
    import Paginator from './Paginator.vue';
    import collection from '../mixins/collection';

    export default {
        components: { Paginator },

        mixins: [collection],

        data() {
            return { dataSet: false , items : []};
        },

        created() {
            this.fetch();
        },

        methods: {
            fetch(page) {
                axios.get(this.url(page)).then(this.refresh);
            },

            url(page) {
                if (! page) {
                    let query = location.search.match(/page=(\d+)/);

                    page = query ? query[1] : 1;
                }

                return `/applications?page=${page}`;
            },

            refresh({data}) {
                this.dataSet = data;
                this.items = data.data;

                window.scrollTo(0, 0);
            }
        }
    }
</script>