<div class="tier-pricing-card card block">
    <div class="card-header">
        <h3>{l s='Your Loyalty Discount' mod='customertieredpricing'}</h3>
    </div>
    <div class="card-body">
        {if $next_tier_discount}
            <p>
                {l s='You have spent' mod='customertieredpricing'} 
                <strong>{$current_spent|string_format:"%.2f"} {$currency->iso_code}</strong> 
                {l s='in the last' mod='customertieredpricing'} {$days_period} {l s='days' mod='customertieredpricing'}.
            </p>
            <p>
                {l s='Spend' mod='customertieredpricing'} 
                <strong>{$amount_needed|string_format:"%.2f"} {$currency->iso_code}</strong> 
                {l s='more to unlock' mod='customertieredpricing'} 
                <strong>{$next_tier_discount}% OFF</strong> {l s='on all future orders!' mod='customertieredpricing'}
            </p>
            
            <div class="progress">
                <div class="progress-bar progress-bar-success" 
                     role="progressbar" 
                     style="width: {$percentage_progress}%" 
                     aria-valuenow="{$percentage_progress}" 
                     aria-valuemin="0" 
                     aria-valuemax="100">
                    {$percentage_progress|string_format:"%.0f"}%
                </div>
            </div>
        {else}
            <p class="text-success">
                <strong>{l s='Congratulations!' mod='customertieredpricing'}</strong><br>
                {l s='You have unlocked' mod='customertieredpricing'} 
                <strong>{$current_tier.discount_percent}% OFF</strong> 
                {l s='on all your orders!' mod='customertieredpricing'}
            </p>
        {/if}
    </div>
</div>

<style>
.tier-pricing-card {
    margin-bottom: 20px;
}
.progress {
    height: 25px;
    margin-top: 15px;
    margin-bottom: 0;
    background-color: #f5f5f5;
    border-radius: 4px;
}
.progress-bar {
    line-height: 25px;
    background-color: #28a745;
}
</style>