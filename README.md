# First RedBean PHP

## What is RedBeanPHP?

> Save tens of thousands of dollars* worth of development time by boosting your productivity with the most powerful, zero config object relational mapper the industry has ever known.
> Powering enterprise web applications since 2009 and still running strong.

## Case Study of RedBeanPHP

During my time as a developer I have made some interesting observations regarding the use of RedBeanPHP. This report describes my findings when developing a very similar e-commerce solution for two companies. Company A uses Java/Hibernate and company B uses PHP/RedBeanPHP. In fact, company A recommended to use the same tooling for B, instead I opted for RedBeanPHP. In addition I added a 3rd company using Laravel/Eloquent. Names of the
companies cannot be revealed due to NDAs.

Results:

|            | Company A | Company B | Company C |
| ---------- | --------- | --------- | --------- |
| Stack      |  Java/Hibernate | PHP/RedBeanPHP | PHP/Laravel/Eloq |
| Application | e-Commerce | e-Commerce | Portal |
| Complexity | Medium | Medium | Low |
| Developers | 10 | 2 | 5 |
| Development time | 3 months | 1 month | 6 months |
| Est. Total Cost | 150k | 7k | 70k |
| Lifetime | 1-2 years | Still running (4+ years) | Unknown |

### Notes:

Reasons from lead developers for not choosing **RedBeanPHP**:

– **Company A:** “PHP is not a serious platform”, apparently, being ‘serious’ is worth 100k (!),
because the projects of A and B were very similar the lead developer recommended Company B to
use the same tools, however Company B refused and selected RedBeanPHP instead.

– **Company C:** “RedBeanPHP is not an official part of Laravel, sticking with industry standards is
important”, in this case ‘Industry Standards’ was worth 63k (!).
