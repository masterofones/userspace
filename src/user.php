<?php

/**
 * @Entity
 * @Table(name="user")
 */
class User {
    /** @Column(type="string", length=8 */
    private $id;

    /** @Column(type="string") */
    private $username;

    /** @Column(type="string", length=60) */
    private $password;

    /** @Column(type="string") */
    private $email;

    /** @Column(type="string") */
    private $phone;

    /** @Column(type="boolean") */
    private $twoFactorEnabled;

    /** @Column(type="datetime") */
    private $lastLogin;

    /** @Column(type="datetime") */
    private $lastActivity;

    /** @Column(type="datetime") */
    private $lastUpdated;

    /** @Column(type="boolean") */
    private $valid;
}

class UserMeta {
    private $id;
    private $userId;
    private $key;
    private $value;
    private $lastUpdated;
}

class UserSession {
    private $id;                        // Unique ID for session (db only)
    private $userId;                    // User the session belongs to
    private $startTime;                 // Time session started
    private $endTime;                   // Time session started
    private $lastActivity;              // Last time user did anything
    private $sessionTimeout;            // Time until session expires
    private $phpSessionId;              // Session ID generated by PHP
    private $phpSessionIdCreated;       // Time that session id was generated
    private $phpSessionIdTimeout;       // Time until key needs changed.
    private $rememberMe;                // Timeout / Don't Timeout
    private $rememberMeTimeout;         // Max length a rememberMe will last.
    private $valid;                     // Is session still active
}

class UserLoginSecurity {
    private $id;
    private $userId;
    private $lastLoginAttempt;
    private $sequentialFailedLogins;
    private $rateLimited;
    private $timeUntilNextAttempt;
}

class UserFailedLoginAttempt {
    private $id;
    private $userId;
    private $time;
    private $ip;
    private $client;
    private $passwordFailure;
    private $twoFactorFailure;
    private $sequentialFailNo;
}

class UserCSRFKey {
    private $id;
    private $sessionId;
    private $key;
}