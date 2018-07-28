<script>
    export default {
        props: ['food_id'],

        data() {
            return {
                amount: '0'
            }
        },
        methods: 
        {
            requestFood()
            {
                axios.post(this.endpoint, {
                    'food_id': this.food_id,
                    'amount': this.amount
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
