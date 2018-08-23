<script>
    export default {
        props: ['food'],

        data() {
            return {
                d: {}
            }
        },

        methods: 
        {
            remove()
            {
                axios.delete('/food', {
                    data: { 'food_id': this.food.id }
                }).then(() => {
                    alert('Food Deleted')
                })
            },
        },
        computed:
        {
            endpoint()
            {
                return '/transfer'
            },
            donator()
            {
                axios.get(`/user/${this.food.donator_id}`)
                    .then( ({data}) => {
                        this.d = data
                    })
                return this.d
            }
        }
    }
</script>