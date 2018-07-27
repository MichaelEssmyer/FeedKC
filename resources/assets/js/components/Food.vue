<script>
    export default {
        props: ['food', 'id'],
        methods: 
        {
            requestFood()
            {                
                axios.post(this.endpoint, {
                    'food': this.food,
                    'user_id': this.id
                })
            }
        },
        computed:
        {
            endpoint()
            {
                return '/transfer'
            }
        }
    }
</script>
