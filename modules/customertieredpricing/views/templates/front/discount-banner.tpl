{if $has_discount}
<div class="alert alert-success discount-banner" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724;">
    <i class="material-icons">local_offer</i>
    <strong>{l s='Loyalty Discount Applied!' mod='customertieredpricing'}</strong>
    <p>
        {l s='You are receiving' mod='customertieredpricing'} 
        <strong>{$discount_percent}% OFF</strong> 
        {l s='your entire order because of your loyalty status.' mod='customertieredpricing'}
    </p>
    {if $discount_message}
        <small>{$discount_message|replace:'{discount}':$discount_percent|replace:'{spent}':$current_spent|replace:'{days}':$days_period nofilter}</small>
    {/if}
</div>
{/if}