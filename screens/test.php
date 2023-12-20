<aura:component Controller="CustomListViewController" implements="force:appHostable,flexipage:availableForAllPageTypes">
    <aura:attribute name="account" Type="Account" />
    <aura:handler name="init" value="{!this}" action="{!c.doInit}"/>
    <div class="slds">
        <div class="slds-scrollable" style="height: 10rem; width: 84rem">
            <table class="slds-table slds-table--bordered slds-max-medium-table--stacked-horizontal"><!--Table must be responsive-->
                <thead>
                    <tr class="slds-text-title--caps slds-align-bottom">
                        <th colspan="10">
                            <article class="slds-card">
                                <div class="slds-card__header slds-grid">
                                    <header class="slds-media slds-media--center slds-has-flexi-truncate">
                                        <div class="slds-media__figure">
                                            <span class="slds-icon_container slds-icon-standard-contact" title="My Call List">
                                                <lightning:icon iconName="Standerd:account" size="small" alternativeText="Indicates approval"/>
                                            </span>
                                        </div>
                                        <div class="slds-media__body">
                                            <h2>
                                                <span class="slds-text-heading--small slds-card__header-link">Account ({!v.account.length})</span>
                                            </h2>
                                        </div>
                                    </header>
                                </div>                         
                            </article>
                        </th>
                    </tr>
                    <tr class="slds-text-heading--label ">                 
                        <th class="slds-is-sortable" scope="col"  > <div class="slds-truncate" title="Account Name">Account Name</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Account Number">Account Number</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Site">Site</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Account Source">Account Source</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Annual Revenue">Annual Revenue</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Clean Status">Clean Status</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="DunsNumber">DunsNumber</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Jigsaw">Jigsaw</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Description">Description</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Number Of Employees">Number Of Employees</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="Industry">Industry</div></th>
                        <th class="slds-is-sortable" scope="col" ><div class="slds-truncate" title="mydate">mydate</div></th>
                </tr>
                </thead>
                <tbody>
                    <aura:iteration items="{!v.account}" var="account">
                        <tr class="slds-hint-parent">                     
                            <th scope="row"  class="slds-cell-edit" data-label="Account Name">
                                <div class="slds-truncate" title="{!account.Name}">
                                    <a href="javascript:void(0);" role="menuitem" tabindex="-1" data-record="{!account.Id}" onclick="{!c.doView}">
                                        <span class="slds-truncate">{!account.Name}</span>
                                    </a>
                                </div>
                            </th>
                            <td data-label="Account Number">
                                <div class="slds-truncate" title="Account Number">{!account.AccountNumber}                                 </div>
                            </td>
                            <td data-label="Site">
                                <div class="slds-truncate" title="Site">{!account.Site}</div>
                            </td>
                            <td data-label="Account Source">
                                <div class="slds-truncate" title="Account Source">{!account.AccountSource}                                     </div>
                            </td>
                           
                            <td data-label="Annual Revenue">
                                <div class="slds-truncate" title="Annual Revenue">{!account.AnnualRevenue}                                   </div>
                            </td>
                            <td data-label="Clean Status">
                                <div class="slds-truncate" title="Clean Status">{!account.CleanStatus}</div>
                            </td>
                          
                            <td data-label="common1">
                                <div class="slds-truncate" title="Duns Number">{!account.DunsNumber}</div>
                            </td>
                           <td data-label="common2">
                                <div class="slds-truncate" title="Jigsaw">{!account.Jigsaw}</div>
                            </td>
                            <td data-label="Concatinate">
                                <div class="slds-truncate" title="Concatinate">{!account.Description}</div>
                            </td>
                             <td data-label="common1">
                                <div class="slds-truncate" title="Number Of Employees">                                                                        {!account.NumberOfEmployees}</div>
                            </td>
                           <td data-label="common2">
                                <div class="slds-truncate" title="Industry">{!account.Industry}</div>
                            </td>
                            <td data-label="Concatinate">
                                <div class="slds-truncate" title="mydate__c">{!account.mydate__c}</div>
                            </td>
                            </tr>
                    </aura:iteration>
                </tbody>
            </table>
        </div>
    </div>
</aura:component>