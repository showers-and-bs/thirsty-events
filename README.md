# thirsty-events

Events for messaging between backend services

![interservices-communication-map](https://github.com/showers-and-bs/Thirsty-API/wiki/images/phase2/interservices-communication.png)

------------------
> Producer: AdminService

## AdminService / AdminCreated

Consumers: All except the content service

## AdminService / AdminDeleted

Consumers: All except the content service

## AdminService / AdminLogout

Consumers: All except the content service

## AdminService / AdminModified

Consumers: All except the content service

------------------
> Producer: MemberService

## MemberService / UserLogin
## MemberService / UserLogout
## MemberService / UserLogRegistered
## MemberService / UpdateMemberships
## MemberService / UpdateSubscriptions

Consumers: All except the content service

------------------
> Producer: PaymentService

## PaymentService / SubscriptionCreated
## PaymentService / SubscriptionModified

------------------
> Producer: ProductService

## ProductService / ProductCreated
## ProductService / ProductModified
## ProductService / JoinOptionCreated
## ProductService / JoinOptionModified
