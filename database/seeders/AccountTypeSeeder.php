<?php

namespace Database\Seeders;

use App\Models\AccountType;
use App\Models\AccountClassification;

use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classifications = [
            'Asset' => [
                'Bank' => [
                    'Default',
                    'CashOnHand (default)',
                    'Checking',
                    'MoneyMarket',
                    'RentsHeldInTrust',
                    'Savings',
                    'TrustAccounts',
                    'CashAndCashEquivalents',
                    'OtherEarMarkedBankAccounts',
                ],
                'Other Current Asset' => [
                    'Default',
                    'AllowanceForBadDebts',
                    'DevelopmentCosts',
                    'EmployeeCashAdvances (default)',
                    'OtherCurrentAssets',
                    'Inventory',
                    'Investment_MortgageRealEstateLoans',
                    'Investment_Other',
                    'Investment_TaxExemptSecurities',
                    'Investment_USGovernmentObligations',
                    'LoansToOfficers',
                    'LoansToOthers',
                    'LoansToStockholders',
                    'PrepaidExpenses',
                    'Retainage',
                    'UndepositedFunds',
                    'AssetsAvailableForSale',
                    'BalWithGovtAuthorities',
                    'CalledUpShareCapitalNotPaid',
                    'ExpenditureAuthorisationsAndLettersOfCredit',
                    'GlobalTaxDeferred',
                    'GlobalTaxRefund',
                    'InternalTransfers',
                    'OtherConsumables',
                    'ProvisionsCurrentAssets',
                    'ShortTermInvestmentsInRelatedParties',
                    'ShortTermLoansAndAdvancesToRelatedParties',
                    'TradeAndOtherReceivables'
                ],
                'Fixed Asset' => [
                    'Default',
                    'AccumulatedDepletion',
                    'AccumulatedDepreciation',
                    'DepletableAssets',
                    'FixedAssetComputers',
                    'FixedAssetCopiers',
                    'FixedAssetFurniture',
                    'FixedAssetPhone',
                    'FixedAssetPhotoVideo',
                    'FixedAssetSoftware',
                    'FixedAssetOtherToolsEquipment',
                    'FurnitureAndFixtures (default)',
                    'Land',
                    'LeaseholdImprovements',
                    'OtherFixedAssets',
                    'AccumulatedAmortization',
                    'Buildings',
                    'IntangibleAssets',
                    'MachineryAndEquipment',
                    'Vehicles',
                    'AssetsInCourseOfConstruction',
                    'CapitalWip',
                    'CumulativeDepreciationOnIntangibleAssets',
                    'IntangibleAssetsUnderDevelopment',
                    'LandAsset',
                    'NonCurrentAssets',
                    'ParticipatingInterests',
                    'ProvisionsFixedAssets'
                ],
                'Other Asset' => [
                    'Default',
                    'LeaseBuyout',
                    'OtherLongTermAssets',
                    'SecurityDeposits',
                    'AccumulatedAmortizationOfOtherAssets',
                    'Goodwill',
                    'Licenses (default)',
                    'OrganizationalCosts',
                    'AssetsHeldForSale',
                    'AvailableForSaleFinancialAssets',
                    'DeferredTax',
                    'Investments',
                    'LongTermInvestments',
                    'LongTermLoansAndAdvancesToRelatedParties',
                    'OtherIntangibleAssets',
                    'OtherLongTermInvestments',
                    'OtherLongTermLoansAndAdvances',
                    'PrepaymentsAndAccruedIncome',
                    'ProvisionsNonCurrentAssets'
                ],
                'Accounts Receivable' => [
                    'Accounts Receivable'
                ]
            ],
            'Equity' => [
                'Equity' => [
                    'Default',
                    'OpeningBalanceEquity (default)',
                    'PartnersEquity',
                    'RetainedEarnings',
                    'AccumulatedAdjustment',
                    'OwnersEquity',
                    'PaidInCapitalOrSurplus',
                    'PartnerContributions',
                    'PartnerDistributions',
                    'PreferredStock',
                    'CommonStock',
                    'TreasuryStock',
                    'EstimatedTaxes',
                    'Healthcare',
                    'PersonalIncome',
                    'PersonalExpense',
                    'Available with minor version: 13',
                    'AccumulatedOtherComprehensiveIncome',
                    'CalledUpShareCapital',
                    'CapitalReserves',
                    'DividendDisbursed',
                    'EquityInEarningsOfSubsiduaries',
                    'InvestmentGrants',
                    'MoneyReceivedAgainstShareWarrants',
                    'OtherFreeReserves',
                    'ShareApplicationMoneyPendingAllotment',
                    'ShareCapital',
                    'Funds'
                ]
            ],
            'Expense' => [
                'Expense' => [
                    'Default',
                    'AdvertisingPromotional',
                    'BadDebts',
                    'BankCharges',
                    'CharitableContributions',
                    'CommissionsAndFees',
                    'Entertainment',
                    'EntertainmentMeals',
                    'EquipmentRental',
                    'FinanceCosts',
                    'GlobalTaxExpense',
                    'Insurance',
                    'InterestPaid',
                    'LegalProfessionalFees',
                    'OfficeExpenses',
                    'OfficeGeneralAdministrativeExpenses',
                    'OtherBusinessExpenses',
                    'OtherMiscellaneousServiceCost',
                    'PromotionalMeals',
                    'RentOrLeaseOfBuildings',
                    'RepairMaintenance',
                    'ShippingFreightDelivery',
                    'SuppliesMaterials',
                    'Travel (default)',
                    'TravelMeals',
                    'Utilities',
                    'Auto',
                    'CostOfLabor',
                    'DuesSubscriptions',
                    'PayrollExpenses',
                    'TaxesPaid',
                    'UnappliedCashBillPaymentExpense',
                    'Utilities',
                    'AmortizationExpense',
                    'AppropriationsToDepreciation',
                    'BorrowingCost',
                    'CommissionsAndFees',
                    'DistributionCosts',
                    'ExternalServices',
                    'ExtraordinaryCharges',
                    'IncomeTaxExpense',
                    'LossOnDiscontinuedOperationsNetOfTax',
                    'ManagementCompensation',
                    'OtherCurrentOperatingCharges',
                    'OtherExternalServices',
                    'OtherRentalCosts',
                    'OtherSellingExpenses',
                    'ProjectStudiesSurveysAssessments',
                    'PurchasesRebates',
                    'ShippingAndDeliveryExpense',
                    'StaffCosts',
                    'Sundry',
                    'TravelExpensesGeneralAndAdminExpenses',
                    'TravelExpensesSellingExpense'
                ],
                'Other Expense' => [
                    'Default',
                    'Depreciation (default)',
                    'ExchangeGainOrLoss',
                    'OtherMiscellaneousExpense',
                    'PenaltiesSettlements',
                    'Amortization',
                    'GasAndFuel',
                    'HomeOffice',
                    'HomeOwnerRentalInsurance',
                    'OtherHomeOfficeExpenses',
                    'MortgageInterest',
                    'RentAndLease',
                    'RepairsAndMaintenance',
                    'ParkingAndTolls',
                    'Vehicle',
                    'VehicleInsurance',
                    'VehicleLease',
                    'VehicleLoanInterest',
                    'VehicleLoan',
                    'VehicleRegistration',
                    'VehicleRepairs',
                    'OtherVehicleExpenses',
                    'Utilities',
                    'WashAndRoadServices',
                    'DeferredTaxExpense',
                    'Depletion',
                    'ExceptionalItems',
                    'ExtraordinaryItems',
                    'IncomeTaxOtherExpense',
                    'MatCredit',
                    'PriorPeriodItems',
                    'TaxRoundoffGainOrLoss'
                ],
                'Cost of Goods Sold' => [
                    'Default',
                    'EquipmentRentalCos',
                    'OtherCostsOfServiceCos',
                    'ShippingFreightDeliveryCos',
                    'SuppliesMaterialsCogs',
                    'CostOfLaborCos (default)',
                    'CostOfSales',
                    'FreightAndDeliveryCost'
                ]
            ],
            'Liability' => [
                'Accounts Payable' => [
                    'Default',
                    'Accounts Payable',
                    'OutstandingDuesMicroSmallEnterprise',
                    'OutstandingDuesOtherThanMicroSmallEnterprise'
                ],
                'Credit Card' => [
                    'Default',
                    'Credit Card'
                ],
                'Long Term Liability' => [
                    'Default',
                    'NotesPayable (default)',
                    'OtherLongTermLiabilities',
                    'ShareholderNotesPayable',
                    'Available with minor version: 13',
                    'AccrualsAndDeferredIncome',
                    'AccruedLongLermLiabilities',
                    'AccruedVacationPayable',
                    'BankLoans',
                    'DebtsRelatedToParticipatingInterests',
                    'DeferredTaxLiabilities',
                    'GovernmentAndOtherPublicAuthorities',
                    'GroupAndAssociates',
                    'LiabilitiesRelatedToAssetsHeldForSale',
                    'LongTermBorrowings',
                    'LongTermDebit',
                    'LongTermEmployeeBenefitObligations',
                    'ObligationsUnderFinanceLeases',
                    'OtherLongTermProvisions',
                    'ProvisionForLiabilities',
                    'ProvisionsNonCurrentLiabilities',
                    'StaffAndRelatedLongTermLiabilityAccounts'
                ],
                'Other Current Liability' => [
                    'Default',
                    'DirectDepositPayable',
                    'LineOfCredit',
                    'LoanPayable',
                    'GlobalTaxPayable',
                    'GlobalTaxSuspense',
                    'OtherCurrentLiabilities (default)',
                    'PayrollClearing',
                    'PayrollTaxPayable',
                    'PrepaidExpensesPayable',
                    'RentsInTrustLiability',
                    'TrustAccountsLiabilities',
                    'FederalIncomeTaxPayable',
                    'InsurancePayable',
                    'SalesTaxPayable',
                    'StateLocalIncomeTaxPayable',
                    'AccruedLiabilities',
                    'CurrentLiabilities',
                    'CurrentPortionEmployeeBenefitsObligations',
                    'CurrentPortionOfObligationsUnderFinanceLeases',
                    'CurrentTaxLiability',
                    'DividendsPayable',
                    'DutiesAndTaxes',
                    'InterestPayables',
                    'ProvisionForWarrantyObligations',
                    'ProvisionsCurrentLiabilities',
                    'ShortTermBorrowings',
                    'SocialSecurityAgencies',
                    'StaffAndRelatedLiabilityAccounts',
                    'SundryDebtorsAndCreditors',
                    'TradeAndOtherPayables'
                ]
            ],
            'Revenue' => [
                'Income' => [
                    'Default',
                    'NonProfitIncome',
                    'OtherPrimaryIncome (default)',
                    'SalesOfProductIncome',
                    'ServiceFeeIncome',
                    'DiscountsRefundsGiven',
                    'UnappliedCashPaymentIncome',
                    'CashReceiptIncome',
                    'OperatingGrants',
                    'OtherCurrentOperatingIncome',
                    'OwnWorkCapitalized',
                    'RevenueGeneral',
                    'SalesRetail',
                    'SalesWholesale',
                    'SavingsByTaxScheme'
                ],
                'Other Income' => [
                    'Default',
                    'DividendIncome',
                    'InterestEarned',
                    'OtherInvestmentIncome (default)',
                    'OtherMiscellaneousIncome',
                    'TaxExemptInterest',
                    'GainLossOnSaleOfFixedAssets',
                    'GainLossOnSaleOfInvestments',
                    'LossOnDisposalOfAssets',
                    'OtherOperatingIncome',
                    'UnrealisedLossOnSecuritiesNetOfTax'
                ]
            ]
        ];     

        collect($classifications)->each(function($types, $classification) {
            $accountClassification = AccountClassification::create(['name' => $classification]);
            collect($types)->each(function($subTypes, $type) use ($accountClassification) {
                $accountType = $accountClassification->account_types()->create(['name' => $type]);
                collect($subTypes)->each(function($subType) use ($accountType) {
                    $accountType->account_sub_types()->create(['name' => $subType]);
                });
            });            
        });         
    }
}
